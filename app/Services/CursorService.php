<?php

namespace App\Services;

use App\Helpers\HttpHelper;

class CursorService
{
    public function generateLanding($params)
    {
        set_time_limit(0);
        $data = $this->createAgent();
        if (!$data) {
            return false;
        }
        $this->createLogo($params['logo']);
        $agentId = $data['id'];
        sleep(70);
        $data = $this->createHeader($agentId, $params['header']);
        if (!$data) {
            return false;
        }
        foreach ($params['blocks'] as $key => $block) {
            sleep(70);
            $data = $this->createBlock($agentId, $block, $key);
            if (!$data) {
                return false;
            }
        }
        sleep(70);
        $data = $this->createFooter($agentId, $params['footer']);
        if (!$data) {
            return false;
        }
        sleep(70);
        $data = $this->optimizeCode($agentId);
        if (!$data) {
            return false;
        }
        return true;
    }

    public function createAgent()
    {
        return $this->post('agents', [
            'prompt' => [
                'text' => 'Create a file demo.blade.php in folder resources/views with title "Bekisoft JSC"',
            ],
            'source' => [
                'repository' => 'https://github.com/20142199/test-ai',
                'ref' => 'master',
            ]
        ]);
    }

    public function createLogo($file)
    {
        // Đặt tên file duy nhất
        $filename = $file->getClientOriginalName();
        // Kiểm tra và tạo thư mục nếu chưa có
        $destinationPath = public_path('images');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        // Lưu file vào thư mục public/images
        $file->move(public_path('images'), $filename);
    }

    public function createHeader($agentId, $header)
    {
        return $this->post('agents/' . $agentId . '/followup', [
            'prompt' => [
                'text' => "Create a file header.blade.php in folder resources/views, using logo file in public/images/logo.png.
                Request 100% figma layout, font size, font style and text. Use padding and margin. Standard horizontal size is 1440px, can be responsive.
                then import it in file demo.blade.php. User this figma content: \n" . $header,
            ]
        ]);
    }

    public function createBlock($agentId, $block, $key)
    {
        return $this->post('agents/' . $agentId . '/followup', [
            'prompt' => [
                'text' => "Create a file block-$key.blade.php in folder resources/views.
                Request 100% figma layout, font size, font style and text. Use padding and margin. Standard horizontal size is 1440px, can be responsive.
                Use the images in the public/images/block-$key folder in order from left to right, top to bottom. Then import it in file demo.blade.php. Use this figma content: \n" . $block,
            ]
        ]);
    }

    public function createFooter($agentId, $footer)
    {
        return $this->post('agents/' . $agentId . '/followup', [
            'prompt' => [
                'text' => "Create a file footer.blade.php in folder resources/views, using logo file in folder public/image.
                Request 100% figma layout. Use padding and margin. Standard horizontal size is 1440px, can be responsive.
                then import it in file demo.blade.php. User this figma content: \n" . $footer,
            ]
        ]);
    }

    public function optimizeCode($agentId)
    {
        return $this->post('agents/' . $agentId . '/followup', [
            'prompt' => [
                'text' => "Check file demo.blade.php in folder resources/views. Separate css and js into separate files. Save css files in resources/css folder. Save js files in resources/js folder. Optimize common parts into components",
            ]
        ]);
    }

    public function get($url, $params)
    {
        $url = config('cursor.url') . $url;
        $response = HttpHelper::get($url, $params, [
            'Authorization' => 'Bearer ' . config('cursor.key'),
            'content-type' => 'application/json',
        ]);
        return $response;
    }

    public function post($url, $params)
    {
        $url = config('cursor.url') . $url;
        $response = HttpHelper::post($url, $params, [
            'Authorization' => 'Bearer ' . config('cursor.key'),
            'content-type' => 'application/json',
        ]);

        return $response;
    }
}

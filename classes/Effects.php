<?php
declare(strict_types=1);

namespace classes;

class Effects
{
    public string $image_path;
    public string $effect_type;

    /**
     * @param string $effect_type
     */
    public function setEffectType(string $effect_type): void
    {
        $this->effect_type = $effect_type;
    }

    /**
     * @return string
     */
    public function getEffectType(): string
    {
        return $this->effect_type;
    }

    /**
     * @param string $image_path
     */
    public function setImage(string $image_path): void
    {
        $this->image_path = $image_path;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image_path;
    }

    /**
     * @param int $width
     * @param int $height
     * @param string $resizeOption
     * @return void
     */
    public function resizeImage(int $width, int $height, string $resizeOption = 'default'): void{
        // TODO: Implement resizeImage method.
        //$this->saveImage();
    }

    /**
     * @param string $savePath
     * @param string $imageQuality
     * @return void
     */
    public function saveImage(string $savePath, string $imageQuality="100"): void{
        // TODO: Implement saveImage method.
    }

    /**
     * @param string $effect
     * @return string[]
     */
    public function getEffectSettings(string $effect): array{
        $settings = [
           "Resize" => ["width","height"],
           "Radius" => ["border-radius"]
        ];
        return $settings[$effect];
    }

    /**
     * @param array $effect_settings
     * @return void
     */
    public function applyEffect(array $effect_settings): void{
        // TODO: Implement applyEffect method.
    }
}
<?php
declare(strict_types=1);

namespace classes;

class Effects
{
    public string $image_path;
    public array $effects = [];

    /**
     * @param array $effect_types
     */
    public function setEffects(array $effects): void
    {
        $this->effects = $effects;
    }

    /**
     * @return array
     */
    public function getEffects(): array
    {
        return $this->effects;
    }
    
    /**
     * @param string $effect
     * @return string[]
     */
    public function apply(string $effect){
        // TODO: Implement apply method.
    }

    /*
     * @return void
     */
    public function applyEffects(): void{
        foreach($this->effects as $effect){
            $this->apply($effect);
        }
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
   
}

<?php
class GN2_VariantJump extends GN2_VariantJump_parent
{
    public function render()
    {
        $parent = $this->getProduct()->getParentArticle();
        $variants = $this->getVariantList();
        if (!is_object($parent)) {
            foreach ($variants as $variant) {
                if (is_object($variant)) {
                    $link = $variant->getLink();
                    header('Location:'.$link);
                    die();
                }
            }
        }
        return parent::render();
    }
}

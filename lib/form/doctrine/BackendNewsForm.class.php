<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BackendNewsForm extends NewsForm
{
  public function configure()
  {
    parent::configure();
    $this->embedI18n(array('pt', 'en'));
    
    unset($this['created_at'], $this['updated_at']);
    
    $this->setWidget('image', new sfWidgetFormInputFileEditable(
                    array(
                        'label' => 'Image',
                        'edit_mode' => !$this->isNew(),
                        'is_image' => true,
                        'with_delete' => false,
                        'template' => '<table class="normal"><tr><td colspan="2">%file%</td></tr><tr><td  colspan="2">%input%</td></tr></table>',
                        'file_src' => $this->getObject()->getImage() ? '/uploads/news' . DIRECTORY_SEPARATOR . $this->getObject()->getImage() : '',
                    )
    ));
    
    $this->setValidator('image', new sfValidatorFile(
                    array(
                        'mime_types' => 'web_images',
                        'path' => sfConfig::get('sf_upload_dir') . '/news' . DIRECTORY_SEPARATOR,
                        'required' => false,
                    )
    ));
    
    $this->widgetSchema->setLabels(array(
      'en'        => __('Inglês'),
      'pt'        => __('Português'),
      'image'     => __('Imagem'),
      'user_id'   => __('Autor'),
      'featured'  => __('Destaque')
    ));
    
    $this->widgetSchema->setHelps(array('featured' => __('Colocar notícia em destaque?')));
  }
}
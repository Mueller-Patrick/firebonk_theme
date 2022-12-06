<?php

namespace humhub\modules\themeOrange\widgets;

use humhub\modules\content\components\ContentContainerController;
use humhub\modules\topic\models\Topic;
use humhub\modules\content\helpers\ContentContainerHelper;
use humhub\modules\user\models\User;
use humhub\modules\ui\menu\MenuLink;
use humhub\modules\ui\menu\widgets\LeftNavigation;
use Yii;
use yii\base\Exception;

class TopicListUser extends LeftNavigation
{

    /** @var User */
    public $user;

    /** @var Space */
    public $id = 'user-topic-menu';

    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!$this->user) {
            $this->user = ContentContainerHelper::getCurrent(User::class);
        }
        
        $this->panelTitle = "<b>" . Yii::t('TopicModule.base', 'Topics') . "</b>";
        $topics = Topic::findByContainer($this->user)->all();

        foreach ($topics as $topic) {
            /* @var $topic Topic */
            $this->addEntry(new MenuLink([
                'label' => $topic->name,
                'url' => $topic->getUrl(),
                'icon' => 'fa-star',
                'sortOrder' => $topic->sort_order,
            ]));
        }

        parent::init();
    }
}

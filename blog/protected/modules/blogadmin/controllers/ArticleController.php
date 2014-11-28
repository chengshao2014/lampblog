<?php

    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    class ArticleController extends CController{
        public function actionShow(){
            echo $this->ubb();
            $this->renderPartial("show");
        }
        
        public function actionArtAdd(){
            $this->renderPartial("artAdd");
        }
        
        public function actionReply(){
            $this->renderPartial("artReply");
        }


/**
 * UBB 解析
 * @return string
 */
        
    }


!(function (NioApp) {
    "use strict";
    
    let conversation_toggle = document.querySelectorAll('.profile-toggle'),
        conversation_item = document.querySelectorAll('.conversation-item'),
        conversation_close = document.querySelectorAll('.conversation-close'),
        conversation_body = document.querySelector('.conversation-body'),
        conversation_profile = document.querySelector('.conversation-profile'),
        shown_conversation  = 'conversation-shown',
        shown_profile  = 'profile-shown',
        auto_hide  = 'conversation-profile-autohide',
        current_conversation  = 'current',
        visible_profile  = 'visible',
        flat_break = NioApp.Break.lg,
        info_break = NioApp.body.classList.contains('has-apps-sidebar') ? NioApp.Break.xl : NioApp.Break.xl2;

    NioApp.Message = {
        autohide : function(){
            if(NioApp.Win.width >= flat_break){
                !NioApp.body.classList.contains(auto_hide) && NioApp.body.classList.add(auto_hide);
            }else{
                NioApp.body.classList.contains(auto_hide) && NioApp.body.classList.remove(auto_hide);
            }
        },
        profile_show : function(){
            conversation_profile.classList.add(visible_profile);
            conversation_body.classList.add(shown_profile); 
            NioApp.body.classList.add(`conversation-${shown_profile}`);
        },
        profile_hide : function(){
            conversation_profile.classList.remove(visible_profile);
            conversation_body.classList.remove(shown_profile); 
            NioApp.body.classList.remove(`conversation-${shown_profile}`);
        },
        profile_toggle : function(){
            conversation_toggle.forEach(item => {
                item.addEventListener('click', function(){
                    conversation_profile.classList.toggle(visible_profile);
                    conversation_body.classList.toggle(shown_profile);

                    if(conversation_profile.classList.contains(visible_profile) && !NioApp.body.classList.contains(`conversation-${shown_profile}`)) {
                        NioApp.body.classList.add(`conversation-${shown_profile}`);
                    } else {
                        NioApp.body.classList.remove(`conversation-${shown_profile}`);
                    }
    
                    if(NioApp.Win.width >= flat_break) {
                        if(NioApp.body.classList.contains(auto_hide)) {
                            NioApp.body.classList.remove(auto_hide);
                        } else if(NioApp.Win.width < info_break && !conversation_profile.classList.contains(visible_profile)) {
                            NioApp.body.classList.add(auto_hide);
                        }
                    }

                })
            })
        },
        page_resize : function(){
            if(NioApp.body.classList.contains('conversation-profile-autohide')){
                NioApp.Win.width >= info_break ? NioApp.Message.profile_show() : NioApp.Message.profile_hide();
            }
            if(NioApp.Win.width >= flat_break && NioApp.Win.width < info_break) {
                if(NioApp.body.classList.contains(`conversation-${shown_profile}`)) {
                    NioApp.body.classList.remove(`conversation-${shown_profile}`);
                    NioApp.Message.profile_hide();
                }
            }
        },
        conversation_show : function() {
            conversation_item.forEach(item => {
                item.addEventListener('click', function(event){
                    event.preventDefault();
                    conversation_item.forEach(aitem => {
                        aitem.classList.remove(current_conversation);
                    });
                    conversation_body.classList.add(shown_conversation);
                    item.classList.add(current_conversation);
                })
            })
        },
        conversation_hide : function() {
            conversation_close.forEach(item => {
                item.addEventListener('click', function(event){
                    event.preventDefault();
                    conversation_body.classList.remove(shown_conversation);
                })
            })
        }
    };
    NioApp.Message.init = function() {
        NioApp.Message.autohide();
        NioApp.Message.profile_toggle();
        NioApp.Message.conversation_show();
        NioApp.Message.conversation_hide();
        NioApp.Win.width >= info_break ? NioApp.Message.profile_show() : NioApp.Message.profile_hide();
    }
    NioApp.docReady(NioApp.Message.init);
    NioApp.onResize(NioApp.Message.page_resize);

})(NioApp);
<?php

function fr($ipRefused){
    echo "
    <div class='center'>
            <div style='background-color: rgba(255, 0, 0, 0.35);padding: 15px;border-radius: 5px;' >
                <img style='max-width: 400px;'' src='403-error.png' ></img><br><br>
                <div class='error'>
                    Vous n'êtes pas autorisé à accéder à la ressource souhaitée<br><br>
                    Le site à renvoyé l'erreur <strong><mark style='border-radius:2px;padding:2px'>".$ipRefused."</mark></strong><br><br>
                    Pour corriger cette erreur, veuillez contacter un administrateur du site ou votre administrateur réseau.
                </div>
            </div>
    </div>";
}
function us($ipRefused){
    echo "
    <div class='center'>
            <div style='background-color: rgba(255, 0, 0, 0.35);padding: 15px;border-radius: 5px;' >
                <img style='max-width: 400px;'' src='403-error.png' ></img><br><br>
                <div class='error'>
                    You are not allowed to access the desired resource<br><br>
                    The site returns the error <strong><mark style='border-radius:2px;padding:2px'>".$ipRefused."</mark></strong><br><br>
                    To correct this error, please contact a site administrator or your network administrator.
                </div>
            </div>
    </div>";
}
function jp($ipRefused){
    echo "
    <div class='center'>
            <div style='background-color: rgba(255, 0, 0, 0.35);padding: 15px;border-radius: 5px;' >
                <img style='max-width: 400px;'' src='403-error.png' ></img><br><br>
                <div class='error'>
                    目的のリソースにアクセスする権限がありません<br><br>
                    サイトがエラーを返しました <strong><mark style='border-radius:2px;padding:2px'>".$ipRefused."</mark></strong><br><br>
                    このエラーを修正するには、サイト管理者またはネットワーク管理者に連絡してください.
                </div>
            </div>
    </div>"; 
}
function nl($ipRefused){
    echo "
    <div class='center'>
            <div style='background-color: rgba(255, 0, 0, 0.35);padding: 15px;border-radius: 5px;' >
                <img style='max-width: 400px;'' src='403-error.png' ></img><br><br>
                <div class='error'>
                    U bent niet geautoriseerd om toegang te krijgen tot de gewenste bron<br><br>
                    De site heeft de fout geretourneerd <strong><mark style='border-radius:2px;padding:2px'>".$ipRefused."</mark></strong><br><br>
                    Neem contact op met een sitebeheerder of uw netwerkbeheerder om deze fout te corrigeren.
                </div>
            </div>
    </div>";
}
function black_list($ip_adress_list,$ip,$blacklist){
    $ip_adress_list = $blacklist[$ip];
    echo "
    <div class='center'>
            <div style='background-color: rgba(255, 0, 0, 0.35);padding: 15px;border-radius: 5px;' >
                <img style='max-width: 400px;'' src='403-error.png' ></img><br><br>
                <div class='error'>
                    Vous n'êtes pas autorisé à accéder à la ressource souhaitée<br><br>
                    Le site à renvoyé l'erreur <strong><mark style='border-radius:2px;padding:2px'>".$ip_adress_list."</mark></strong><br><br>
                    Pour corriger cette erreur, veuillez contacter un administrateur du site ou votre administrateur réseau.
                </div>
            </div>
    </div>";
}
function kr($ipRefused){
    echo "
    <div class='center'>
            <div style='background-color: rgba(255, 0, 0, 0.35);padding: 15px;border-radius: 5px;' >
                <img style='max-width: 400px;'' src='403-error.png' ></img><br><br>
                <div class='error'>
                    원하는 리소스에 액세스할 수 있는 권한이 없습니다.<br><br>
                    사이트에서 오류를 반환했습니다 <strong><mark style='border-radius:2px;padding:2px'>".$ipRefused."</mark></strong><br><br>
                    이 오류를 수정하려면 사이트 관리자나 네트워크 관리자에게 문의하십시오.
                </div>
            </div>
    </div>";
}



?>
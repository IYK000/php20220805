<div class="i-i-container">
    <!-- 物件情報 -->
    <div class="m-container-h fs-b"><span>物件情報</span></div>

    <div>
        <table class="t-tp1">
            <tr>
                <td> <?=$PropertyInfomation['building'];?> <?=$PropertyInfomation['room'];?> </td>
            </tr>
        </table>
    </div>
    <div class="t-r f-l i-i-Topbtn lb-none" onclick="gotoTop()">
        ページTOPへ戻る
    </div>

    <!-- 会員情報 -->
    <div class="m-container-h fs-b"><span>会員情報</span></div>

    <div>
    <table class="t-tp2">
        <tr>
            <td> 会員ID </td>
            <td> <?=$MemberInformation['memberid__c'];?> </td>
        </tr>
        <tr>
            <td> 氏名 </td>
            <td> <?=$MemberInformation['lastname'];?> <?=$MemberInformation['firstname'];?></td>
        </tr>
        <tr>
            <td> フリガナ </td>
            <td> <?=$MemberInformation['lastnamehurigana__c'];?> <?=$MemberInformation['firstnamehurigana__c'];?> </td>
        </tr>
        <tr>
            <td> メールアドレス </td>
            <td> <?=$MemberInformation['personemail'];?> </td>
        </tr>
    </table>
    </div>
    <div class="t-r f-l i-i-Topbtn lb-none" onclick="gotoTop()">
        ページTOPへ戻る
    </div>


    <!-- メールサービス -->
    <div class="m-container-h fs-b"><span>メールサービス</span></div>

    <div>
        <?php foreach($MailserviceList as $MailserviceInformation){ ?>
        <table name="mailService" class="t-tp2">
            <tr>
                <td> メールアドレス </td>
                <td colspan="3"> <?=$MailserviceInformation['email_address__c'];?> </td>
            </tr>
            <tr>
                <td> メールサーバユーザ名 </td>
                <td colspan="3"> ◆メールアドレスと同じ？◆<?=$MailserviceInformation['email_address__c'];?> </td>
            </tr>
            <tr>
                <td> SMTPサーバ </td>
                <td> <?=$MailserviceInformation['smtp_server__c'];?> </td>
                <td> POPサーバ </td>
                <td> <?=$MailserviceInformation['pop_server__c'];?> </td>
            </tr>
            <tr>
                <td> IMAPサーバ </td>
                <td colspan="3"> ■imap.mx5.canvas.ne.jp■<?=$MailserviceInformation['name'];?> </td>
            </tr>
            <tr>
                <td> 迷惑メールブロックサービス </td>
                <td colspan="3"> ■利用中■<?=$MailserviceInformation['name'];?> </td>
            </tr>
            <tr>
                <td> ダイレクトメール設定 </td>
                <td colspan="3"> ■当社からのサービス告知等のメールを受け取る■<?=$MailserviceInformation['name'];?> </td>
            </tr>
        </table>
        <?php } ?>
    </div>

    <div class="m-t-2r">※IMAPに関する情報は、弊社ホームページで順次公開させていただきます。</div>

    <div class="t-r f-l i-i-Topbtn lb-none" onclick="gotoTop()">
        ページTOPへ戻る
    </div>

    <!-- IP電話サービス -->
    <div class="m-container-h fs-b"><span>IP電話サービス</span></div>

    <div>
    <table class="t-tp2">
        <tr>
            <td> ユーザID </td>
            <td> ■SL999999■ </td>
        </tr>
        <tr>
            <td> パスワード </td>
            <td> ■ABCD-EFG-HIJK■ </td>
        </tr>
    </table>
    </div>
    <div class="t-r f-l i-i-Topbtn lb-none" onclick="gotoTop()">
        ページTOPへ戻る
    </div>

</div>
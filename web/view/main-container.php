<div class="i-i-container">
    <!-- 物件情報 -->
    <div class="m-container-h fs-b"><span>物件情報</span></div>

    <div>
        <table class="t-tp1">
            <tr>
                <td> 物件情報テストテキスト </td>
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
            <td> <?=$MemberInformation['lastname'];?> <?=$MemberInformation['firstname'];?> </td>
        </tr>
        <tr>
            <td> フリガナ </td>
            <td> <?=$MemberInformation['hurigana__c'];?> </td>
        </tr>
        <tr>
            <td> メールアドレス </td>
            <td> <?=$MemberInformation['mailaddress__c'];?> </td>
        </tr>
    </table>
    </div>
    <div class="t-r f-l i-i-Topbtn lb-none" onclick="gotoTop()">
        ページTOPへ戻る
    </div>


    <!-- メールサービス -->
    <div class="m-container-h fs-b"><span>メールサービス</span></div>

    <div>
    <table name="mailService" class="t-tp2">
        <tr>
            <td> メールアドレス </td>
            <td colspan="3"> abcd@testmail.com </td>
        </tr>
        <tr>
            <td> メールサーバユーザ名 </td>
            <td colspan="3"> abcd@testmail.com </td>
        </tr>
        <tr>
            <td> SMTPサーバ </td>
            <td> smtp.test.test.co.jp </td>
            <td> POPサーバ </td>
            <td> pop.test.test.co.jp </td>
        </tr>
        <tr>
            <td> IMAPサーバ </td>
            <td colspan="3"> imap.test.test.co.jp </td>
        </tr>
        <tr>
            <td> 迷惑メールブロックサービス </td>
            <td colspan="3"> 利用中 </td>
        </tr>
        <tr>
            <td> ダイレクトメール設定 </td>
            <td colspan="3"> 当社からのサービス告知等のメールを受け取る </td>
        </tr>
    </table>
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
            <td> ID123456 </td>
        </tr>
        <tr>
            <td> パスワード </td>
            <td> ABCD-EFG-HIJK </td>
        </tr>
    </table>
    </div>
    <div class="t-r f-l i-i-Topbtn lb-none" onclick="gotoTop()">
        ページTOPへ戻る
    </div>

</div>
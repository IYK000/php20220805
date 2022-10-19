<div id="container">
    <div>
        <div>会員IDの利用者や会員パスワードなどを変更することができます。</div>
        <div>基本サービスお申込時の代表者の氏名は変更できません。</div>
        <div>会員情報を変更する会員を選択してください。</div>
    </div>

    <div>
        <table class="t-tp3 m-tc-1r">
            <colgroup>
                <col width="100px"></col>
                <col width="150px"></col>
                <col width="*"></col>
            </colgroup>
            <tr>
                <td></td>
                <td>会員ID</td>
                <td>氏名</td>
            </tr>
            <tr>
                <td class="t-c"><button class="btn-p">変更</button></td>
                <td><?=$MemberInformation['memberid__c']?></td>
                <td><?=$MemberInformation['lastname']?> <?=$MemberInformation['firstname']?></td>
            </tr>
            <?php foreach($MembeChilledrList as $MembeChilledrInformation){ ?>
            <tr>
                <td class="t-c"><button class="btn-p">変更</button></td>
                <td><?=$MembeChilledrInformation['memberid__c']?></td>
                <td><?=$MembeChilledrInformation['lastname']?> <?=$MembeChilledrInformation['firstname']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="t-c">
        <input type="button" class="btn-p-b" value="戻る">
    </div>

</div>
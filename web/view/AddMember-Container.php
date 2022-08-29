<div id="container">
    <div>
        <div>会員IDの追加を行うことができます。</div>
        <div>会員情報を入力して「次へ」ボタンをクリックしてください。</div>
        <div class="m-tc-1r required">のついた内容は必須項目になります。必ず入力してください。</div>
    </div>

    <div>        <input type="submit" class="btn-p" id="submit" value="次へ">
        <table class="t-tp2">
            <tr>
                <td> <div class="required">姓</div> </td>
                <td><input type="text" name="givenname" class="w-60" placeholder=""><span>[全角]</span></td>
            </tr>

            <tr>
                <td> <div class="required">名</div> </td>
                <td><input type="text" name="firstname" class="w-60" placeholder=""><span>[全角]</span></td>
            </tr>

            <tr>
                <td> <div class="required">姓　フリガナ</div> </td>
                <td><input type="text" name="givenkana" class="w-60" placeholder=""><span>[全角]</span></td>
            </tr>

            <tr>
                <td> <div class="required">名　フリガナ</div> </td>
                <td><input type="text" name="firstkana" class="w-60" placeholder=""><span>[全角]</span></td>
            </tr>

            <tr>
                <td> <div class="required">会員パスワード</div> </td>
                <td>
                    <input type="password" name="pw" maxlength="16" placeholder="" id="userPw"><span>[半角]</span>
                    <div class="f-l">他人が推測できないような複雑な文字列にしてください。</div>
                    <div class="f-l">（例）名前や会員ID、生年月日を利用しない。アルファベットと数字を組み合わせる。</div>
                </td>
            </tr>

            <tr>
                <td> <div class="required">会員パスワード(確認)</div> </td>
                <td><input type="password" maxlength="16" name="repw" placeholder="" id="userPwC"><span>[半角]</span></td>
            </tr>

            <tr>
                <td><div>性別</div></td>
                <td>
                    <select name="gender" id="">
                        <option value=""></option>
                        <option value="男">男</option>
                        <option value="女">女</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><div>生年月日</div></td>
                <td>
                    <select name="bYear" id="">
                        <option value=""></option>
                        <option value="1900">1900</option>
                        <option value="2022">2022</option>
                    </select>
                    <span>年</span>

                    <select name="bMonth" id="">
                        <option value=""></option>
                        <option value="1">1</option>
                    </select>
                    <span>月</span>

                    <select name="bDay" id="">
                        <option value=""></option>
                        <option value="1">1</option>
                    </select>
                    <span>日</span>

                </td>
            </tr>
        </table>
    </div>

    <div class="m-tc-1r">
        <table class="t-tp3">
            <tr><td>メールアドレス</td></tr>
            <tr>
                <td>
                    <input type="radio" name="check-mail" id="crate-mail" checked> <label for="crate-mail">新規にメールアドレスを登録する</label>
                    <div class="m-tc-1r">
                        <table class="p-c-m t-tp2 w-80-f">
                            <tr>
                                <td> <div class="required">メールアドレス</div> </td>
                                <td>
                                    <input type="mail" class="w-60" maxlength="24" id="mailAcc"><span>[半角]</span>
                                    <div class="f-l">メールアドレスの＠より前の部分を入力してください</div>
                                </td>
                            </tr>
                            <tr>
                                <td> <div class="required">メールパスワード</div> </td>
                                <td>
                                    <input type="password" name="mail-pw" placeholder=""><span>[半角]</span>
                                    <div class="f-l">他人が推測できないような複雑な文字列にしてください。</div>
                                    <div class="f-l">（例）名前や生年月日を利用しない。アルファベットと数字を組み合わせる</div>
                                </td>
                            </tr>
                            <tr>
                                <td> <div class="required">メールパスワード(確認)</div> </td>
                                <td>
                                    <input type="password" name="mail-repw" placeholder=""><span>[半角]</span>
                                </td>
                            </tr>
                            <tr>
                                <td> <div>ダイレクトメール設定</div> </td>
                                <td>
                                    <table class="t-tp-n">
                                        <tr class="f-l">
                                            <td class="w-60-f vv-tt">当社からのサービス告知等のメールを</td>
                                            <td>
                                                <div>
                                                    <input type="radio" name="ads-mail" id="ymail" checked>
                                                    <label for="ymail">受け取る</label>
                                                </div>
                                                <div>
                                                    <input type="radio" name="ads-mail" id="nmail">
                                                    <label for="nmail">受け取らない</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="check-mail" id="not-use-mail"> <label for="not-use-mail">メールアドレスを利用しない</label></td>
            </tr>
        </table>
    </div>

    <div>
        <table>
            <table class="t-tp3">
                <tr>
                    <td colspan="2">ご利用可能な文字</td>
                </tr>
                <tr>
                    <td><div>・会員パスワード</div></td>
                    <td>
                        <div>
                            <p>・半角アルファベット大小文字、半角数字、記号の８～１６文字の組み合わせを入力してください。</ｄ>
                            <p>・記号は!"#$%&=-@/+*?をご利用になれます</p>
                            <p>・他人が推測できないような複雑な文字列にしてください。</p>
                            <p>（例）名前や会員ID、生年月日を利用しない。</p>
                            <p>アルファベットと数字を組み合わせる。</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><div>・メールアカウント</div></td>
                    <td>
                        <div>
                            <p>・半角アルファベット小文字、半角数字、「-」(ハイフン)、「_」(アンダーバー)、「.」(ピリオド)の５～２４文字の組み合わせで入力してください</p>
                            <p>・アルファベット大文字はご利用できません。</p>
                            <p>・先頭の１文字は必ず半角アルファベット小文字で入力してください。</p>
                            <p>・末尾に記号はご利用になりません。</p>
                            <p>・記号が２つ以上連続でご利用になりません。</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><div>・メールパスワード</div></td>
                    <td>
                        <p>・半角アルファベット大小文字、半角数字の８～１６文字の組み合わせを入力してください。</p>
                        <p>・記号はご利用になれません。</p>
                        <p>・メールアカウントと同じものは使用できません。</p>
                        <p>・他人が推測できないような複雑な文字列にしてください。</p>
                        <p>（例）名前や会員ID、生年月日を利用しない。</p>
                        <p>アルファベットと数字を組み合わせる。</p>
                    </td>
                </tr>
            </table>
        </table>
    </div>

    <div>
    </div>

    <div>

        <input type="button" class="btn-p" value="戻る">
    </div>
</div>
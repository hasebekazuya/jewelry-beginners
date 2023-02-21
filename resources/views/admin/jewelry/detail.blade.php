@extends('layouts.admin')
@section('title', 'ジュエリーとは')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="contents__title">ジュエリーの基礎知識</h2>
        </div>
        <!-- コンテンツ本体 -->
        <div class="row">
            <div class="list-jewelry col-md-10 mx-auto">
                <div class="row">
                    <h3 class="content_subtitle">ジュエリーとは？</h3>
                        <p>ここでは装身具に使用する素材に制限のあるもので、地金には金・銀・プラチナ類を使用し、天然・人口の宝石素材のみ使用したものと定義します。<br />
                        この意味で宝飾品とジュエリーとは同義語です。</p>
                </div>        
                <div class="row">
                    <h3 class="content_subtitle">ジュエリーとアクセサリーの違い</h3>
                        <dl>
                            <dt>◆アクセサリーについて</dt>
                                <dd>
                                    アクセサリーというのは、衣服を引き立てるための装身具の総称です。リングやネックレスのほかに、帽子、ブローチ、ベルトなどもアクセサリーに含まれます。<br />
                                    用途だけでなく、素材にも制限はありませんので、木製、布製、革製等さまざまです。
                                </dd>
                            <dt>◆ジュエリーについて</dt>
                                <dd>
                                    日本ジュエリー協会では、ジュエリーを以下のように定義しています。<br />
                                    「装身具のうち、素材に貴金属、天然宝石を用いた宝飾品を言う。」
                                </dd>
                            </dt>
                            <dt>ジュエリー用の貴金属とは？</dt>
                                <dd>
                                    ジュエリー用の貴金属及びその合金は金、銀、プラチナ、パラジウムの4種の元素及びその合金です。<br />
                                    ただし、この4種を使用していても、純度があまりにも低い場合はジュエリーと呼べないことがあります。<br />
                                    それぞれの最低品位（純度）区分は日本工業規格(JIS)が定めており、金：37.5%、銀：80%、プラチナ：85%、パラジウム：50%となっています。</p>
                                </dd>
                            </dt>
                            <dt>まとめ</dt>
                                <dd>
                                    ジュエリーとアクセサリーについてまとめると、アクセサリー中でも純度の高い金、銀、プラチナ、パラジウムと天然宝石が使用された希少価値の高いものだけをジュエリーと呼ぶことができるのです。<br />
                                    ジュエリーはアクセサリーと比べると、長きにわたって輝き続ける永遠性があります。特にプラチナはその代表と言っても良いかもしれません。<br />
                                    長く使用する結婚指輪や、大切な方への贈り物にはアクセサリーではなく、ジュエリーが適していると思われます。
                                </dd>
                        </dl>    
                </div>
                <div class="row">
                    <h3 class="content_subtitle">モース硬度について</h3>
                        <dl>
                            <dt>◆モース硬度とは？</dt>
                                <dd>
                                    簡単にまとめてしまうと、「宝石の硬度＝硬さ」を計る基準がモース硬度。<br/>
                                    モース硬度とは、主に「鉱物に対する硬さの尺度」の1つ。<br/>
                                    モース硬度の「モース」は、この尺度を考え出したドイツの鉱物学者、「フリードリッヒ・モース」に由来しているそうです。<br/>
                                    硬さの尺度として、1から10までの10段階に分けてそれぞれの段階に対応する標準の鉱物が設定されています。<br/>
                                    <br/>
                                </dd>
                            <dt>◆硬さについて</dt>
                                <dd>
                                    硬さの基準は「鉱物同士でひっかいたときに傷が付くか」であり、傷ついた方がモース硬度は低いとされます。<br/>
                                    「たたいて壊れるかどうか」の堅牢さではありません。例えばモース硬度が最高の10段階目のダイヤモンドであっても衝撃には弱く、<br/>
                                    落としたり、ハンマーなどである一定の方向からたたくと簡単に割れてしまいます。<br/>
                                    <br/>
                                    モース硬度は、一番硬いものが「10」、一番軟らかいものが「1」。<br/>
                                    ちなみに爪のモース硬度は約2.5なので、爪で引っ掻いて削れる鉱物はモース硬度2.5以下と判断することができます。
                                </dd>
                        </dl> 
                        <div class="image">
                            <img src="{{ secure_asset('imag/73573766ece3f977642aae8407a054e7.jpg') }}">
                       </div>
                </div>
                <div class="row">
                    <h3 class="content_subtitle">金属の種類</h3>
                        <dl>
                            <dt>◆プラチナ</dt>
                                <dd>
                                    ジュエリーとして使用される金属は、「割金」という金属を混ぜる必要があります。割金は強度を上げたり色を調整する目的で使われます。<br/>
                                    プラチナはPt950、Pt900といった表記で、Pt950はプラチナが95％、Pt900はプラチナが90％、それぞれの残りが割金という意味なのです。<br/>
                                    <br/>
                                    金属の純度が高いということはその分割金（他の金属）が少なくなります。プラチナそのものはアレルギーを起こしにくいと言われる金属です。<br/>
                                    そのためプラチナジュエリーの割金が少なければ少ないほど、アレルギーが起こる確率も低くなります。
                                </dd>    
                            <dt>◆金</dt>
                                <dd>
                                    身近なゴールドジュエリーをチェックしてみると、「K18」「K14」といった刻印のアイテムが多いことがわかります。<br/>
                                    なぜ「K24」の純金ではなく、純度を下げた合金を使用するのか？と、不思議に思う方も多いのではないでしょうか。<br/>
                                    その理由は、純金という素材の柔らかさにあります。<br/>
                                    硬いように見える純金ですが、金属の中では硬度が低く、柔らかいという特徴があります。<br/>
                                    このため、「熱に弱い」「簡単に傷がつく」「日常生活の中で型崩れしてしまう」といったデメリットが生じるのです。<br/>
                                    <br/>
                                    別の金属を混ぜて合金にするのはこうした弱点を補うため、あえて「K18」「K14」にすることで、日常的に使いやすいジュエリーに仕上げているというわけです。</p>
                                    プラチナとよく混同されるホワイトゴールドは、純金に銀やニッケル、パラジウムを混ぜ合わせた合金で、プラチナとは違います。
                                </dd>
                            <dt>◆銀</dt>
                                <dd>
                                    1000分率で表される銀の純度のうち、一番多く使われるSV925 (銀が92.5％) はスターリングシルバーと呼ばれています。<br/>
                                    また、SV950 (銀が95%) もよく使用されます。こちらはシルバーブランドによく見られる純度です。<br/>
                                    ジュエリーショップで見かける銀のアクセサリーには、ロジウムやニッケルといった「メッキがかかっているアクセサリー」と「メッキがかかっていないアクセサリー」があります。<br/>
                                    前者は銀色が長続きし、後者は徐々に黒くなります。
                                </dd>    
                        </dl>
                </div>
                <div class="row">
                    <h2>カラーゴールドの主な種類5つ</h2>
                         <div class="txtbox">
                            <p>カラーゴールドは、金に銅やパラジウムなどの金属を配合し、さまざまな色味を持たせたジュエリー素材です。金に他の金属を混ぜ込むことで、素材の強度を高めるという加工上のメリットがあります。<br/>
                               ここでは、カラーゴールドの色別に、含まれている素材の割合と特徴について解説します。</p>
                </div>
                <h3 class="content_subtitle">1.イエローゴールド</h3>
                    <div class="txtbox">
                        <p>イエローゴールドは、金に含まれる銀と銅の割合がほぼ同じです。純金の色味からやや薄くなることにより肌に馴染みやすく、身に着けやすいゴールドカラーとなります。</p>
                        ワンポイントとしてイエローゴールドを飾り付けると、豪華さと上品さを両立できます。ネックレスやピアスなど、特に顔周りを引き立てるようなアクセサリーにおすすめです。<br/>
                        色調の明るいイエローゴールドが、表情を明るく演出してくれます。</p>
                    </div>
                 <h3 class="content_subtitle">2.グリーンゴールド</h3>
                    <div class="txtbox">
                      <p>グリーンゴールドの色味は、銀や銅を主成分として作られます。素材の強度が低く、加工が非常に困難であるため、装飾品としての流通は多くありません。もし、グリーンゴールドを使用するとしても、変形に注意して丁寧な扱いを心がけましょう。<br/>
                        グリーンゴールドの緑がかった色合いは珍しく、個性的なアクセサリーを好む人におすすめです。</p>
                    </div>
                <h3 class="content_subtitle">3.ホワイトゴールド</h3>
                    <div class="txtbox">
                      <p>ホワイトゴールドの白い色味は、パラジウム・銀・銅を配合して作られています。白い貴金属として高い価値のあるプラチナの代用品として使われ始めた歴史があり、現在ではプラチナと並ぶ人気の素材となりました。<br/>
                         ホワイトゴールドは一般的にメッキ加工でより白さが増すように仕上げられており、劣化すると元々の黄色がかった色味が現れます。<br/>
                         ジュエリー・ブランドのサービスによっては再メッキが可能な場合も多く、プラチナより硬度が高いことから、装飾品として長く愛用できる素材です。</p>
                    </div>
                <h3 class="content_subtitle">4.ピンクゴールド</h3>
                    <div class="txtbox">
                      <p>金をベースに銅の含有量を増やし、銀とパラジウムで調整すると、ピンクゴールドの美しい色合いが完成します。銅の割合が多く赤みの濃いものほど、硬く加工が難しい傾向にあり、サイズ直しなどの再加工が困難です。<br/>
                         パラジウムの割合が増えることで赤みが薄まり、柔らかく加工しやすい状態となります。</p>
                         ピンクベージュとも呼ばれる柔らかく上品な色合いは、腕時計やブレスレットとしても人気があります。<br/>
                         淡く優しい雰囲気に見せたい場合に、ピンクゴールドはおすすめです。</p>
                    </div>
                <h3 class="content_subtitle">5.レッドゴールド</h3>
                    <div class="txtbox">
                      <p>レッドゴールドは、銅を配合して赤みがかった金色を作り出しています。銅の比率が高くなることで硬度が増し、ピンクゴールドよりさらに加工が困難であることから、装飾品としては流通がほとんど見られません。<br/>
                         銅が酸化することで変色が進みやすい点がデメリットで、定期的な手入れが欠かせない素材です。</p>
                         ピンクゴールドよりさらにクリアな赤みが見られることから、肌の色に左右されずにピンクの色味を楽しめる点が魅力と言えます。</p>
                    </div>
                <div class="row">
                    <h3 class="content_subtitle">まとめ</h3>    
                    <p>地金には金・銀・プラチナ類を使用し、天然・人口の宝石素材のみ使用したものをジュエリーと呼び。<br/>
                        長期使うもので日常的に使うのに適しているのは、プラチナや金が使いやすいと言えます。</p>
                </div>
            </div>
        </div>
    </div>
@endsection
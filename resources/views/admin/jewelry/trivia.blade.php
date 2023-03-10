@extends('layouts.admin')
@section('title', '豆知識')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="contents__title">★豆知識</h2>
        </div>
        <nav class="header_list_index">
             <ul>
                <li>
                    <a href="{{ route('admin.jewelry.top') }}"class="btn-flat-simple">
                    <i class="fa fa-caret-right"></i>>Top</a>
                    <span class="menu_border"></span>
                    <span class="menu_line"></span>
                </li>
            </ul>
        </nav>
        <!-- コンテンツ本体 -->
        <div class="row">
            <div class="list-jewelry col-md-10 mx-auto">
                <h3 class="content_subtitle">★ダイヤモンドの４C について</h3>
                    <p>ダイヤモンドの品質は４つの鑑定基準で品質の評価がされます。</p>
                    <br/>
                <h4 class="mini_content" data-en="Carat">カラット</h4>
                    <p>カラットはダイヤモンドの重さの単位で、１カラットは０．２０ｇです。<br/>
                    重量の大きいものほど,希少でありより価値も高くなっていきます。</p>
                    <br/>
                <h4 class="mini_content" data-en="Clarity">クラリティ</h4>
                    <p>クラリティとはダイヤモンドの透明度を表します。<br/>
                    天然の宝石であるダイヤモンドには微細な不純物や傷が含まれています。<br/>
                    これらがより少なく、より小さいほどダイヤモンドは多くの光を通し、美しく輝きます。<br/>
                    この透明度は、１０倍に拡大して観察し、その程度に応じて１１ランクに分類されます。</p>
                <h4 class="mini_content" data-en="Colour">カラー</h4>
                    <p>カラーはダイヤモンドの色のことです。<br/>
                    ダイヤモンドには自然の色が様々についており、完全な無色から黄色っぽい茶色まで何段階かの色合いがあります。<br/>
                    無色に近いダイヤモンドほど光をスムーズに透過させ虹色に輝く為より価値があります。</p>
                <h4 class="mini_content" data-en="Cut">カット</h4>
                    <p>カットはダイヤモンドをどのように研磨しているかを表しています。<br/>
                    ダイヤモンドの輝きはカットと密接に関係しており、カットの良いものはそれだけ美しく輝きます。<br/>
                    カットによって、色を強調することも、内包物を隠すこともできます。<br/>
                    その石の可能性を見極め、最も価値のある特徴が組み合わさるようカッティングします。</p>
                <div class="image">
                    <img src="{{ secure_asset('imag/59178a2115131ffeac216ffd55bb9b74.jpg') }}" class="image_size">
                </div> 
                <br/>
                <h3 class="content_subtitle">★結婚指輪と婚約指輪の違い</h4>
                    <h4 class="mini_content" data-en="Marriage">結婚指輪の意味</h4>
                        <p>結婚指輪は結婚の印であると同時に、常にお互いの存在を感じられるふたりの絆の象徴。<br/>
                        言葉にしなくても結婚していることを周囲に伝えられるので、異性が近寄ってくるリスクを減らすこともできます。</p>
                        <br/>
                    <h4 class="mini_content" data-en="Engagement">婚約指輪の意味</h4>
                        <p>婚約したことを表すもので、婚約期間だけのものというわけではなく、結婚後の着用ももちろんOKです。<br/>
                        結婚指輪とセットにして日常的に身に着けている人もいます。</p>
                        <br/>
                <h3 class="content_subtitle">★鑑定書と鑑別書の違い</h3> 
                    <h4 class="mini_content" data-en="Appraisal">鑑定書とは？</h4>
                        <p>ダイヤモンドを購入した際などについてくるものです。<br/>
                            この鑑定書はダイヤモンドのみに発行されます。<br/>
                            ではダイヤモンドのなんの鑑定なのか？それは『4C』と言われるものに関係します。<br/>
                            このように4Ｃの基準に基づいてダイヤモンドをランク分けした結果のことをいいます。<br/>
                            ダイヤモンドの品質について書かれたもの、それが鑑定書です。</p>
                        <br/>
                        <h4 class="mini_content" data-en="Inclusion">インクルージョン</h4>
                            <p>インクルージョンとは内包物と呼ばれるもので、宝石の内部に入っている液体や固体などの物質のことをいいます。<br/>
                            これが少なければ少ないほど高品質のダイヤモンドと判定されます。<br/>
                            インクルージョンとは、内包物と呼ばれるもので、宝石の内部に入っている液体や固体などの物質のことをいいます。<br/>
                            これが少なければ少ないほど高品質のダイヤモンドと判定されます。</p>
                    <br/>
                    <h4 class="mini_content" data-en="Identification">鑑別書とは？</h4>
                        <p>鑑別書は、宝石のサイズ・形の他に、それが天然のものか、人工のものかを記したものです。<br/>
                        こちらはどんな種類の石でも発行可能で、ダイヤモンドでももちろん発行できます。<br/>
                        <br/>
                        記載される内容は<br/>
                        ・宝石が天然石か、あるいは人工石かを判別し、人工処理が施されている場合にはどのような処理かが記入されます。<br/>
                        <br/>
                        ・宝石の分析が記載されます。<br/>
                        硬度・屈折率・多色性などが測定され、サイズ・カット・重量等が記載されます。</p>
                <h3 class="content_subtitle">★金やプラチナが変色しないは間違い！！！</h3>
                    <p>ジュエリーに使用するプラチナやゴールド（18金、14金、10金）はお手入れしなくても変色しませんは全くの嘘です。</p>
                    <h4 class="mini_content"data-en="Cause">ジュエリーが変色してしまう原因</h4>
                        <p>なぜジュエリーの金やプラチナは変色を起こすのでしょうか？<br/>
                        ジュエリーに使用するプラチナやゴールドは強度を出すために、別の金属を混ぜて宝飾品として加工のしやすい状態に加工します。<br/>
                        いわゆる割金というものです。<br/>
                        その割金に使用した金属が酸化して変色することが、プラチナやゴールドのジュエリーが変色する原因となってまいります。<br/>
                        変色する原因として、空気中の酸素や、ご自身から出る汗や皮脂・シャンプーやせっけんなどの科学薬品、温泉の成分に反応することで変色が起こると言われております。</p>
                    <h4 class="mini_content" data-en="Handle">ジュエリーが変色してしまった時の対処</h4>
                        <p>・中性洗剤で洗う<br/>
                        <br/>
                        注意点として、宝石の中には、中性洗剤が付着してしまうとくすんでしまうものがあります。<br/>
                        硬度が高くて強い、ダイヤモンドやルビー、サファイア、トパーズなどは平気ですが、硬度の低いエメラルド、ターコイズなどは避けましょう。<br/>
                        洗剤がなくとも、水につけるだけで変質してしまう宝石もあります。オパールやさんご、真珠、琥珀（こはく）などの宝石は自分で洗わないで、ジュエリーショップにお願いして下さい。</p>
                        <br/>
                        ・専用クリーナーを使用し汚れを落とせます。取扱方は説明書に従ってご使用して下さい。<br/>
                        <br/>
                        ・ジュエリーショップで磨いてもらう自宅でのお手入れに自信がない、汚れが目立つという場合は専門家にお任せしましょう。<br/>
                        超音波洗浄機などを使ってきれいに仕上げてくれます。<br/>
                        ジュエリーを購入したお店に持っていくと、サービスできれいにしてくれることもあります。<br/>
                        プレゼントなどほかのお店で購入したものであれば、できるかどうか相談してみましょう。</p>
            </div>
        </div>    
@endsection                    
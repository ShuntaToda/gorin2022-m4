<?php get_header() ?>
<section class="l-section my-5">
    <div class="c-info">
        <div class="c-info__title text-primary">
            <h2>お問い合わせ</h2>
        </div>
        <div class="c-info__content border">
            <form>
                <div class="mb-3">
                    <label class="form-label">お名前</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">メールアドレス</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">タイトル</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">本文</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>

                
                <button type="submit" class="btn btn-primary">送信</button>
            </form>
        </div>
    </div>
</section>
<?php get_footer() ?>
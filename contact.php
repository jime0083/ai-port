<?php
/*
Template Name: Contact
*/
get_header(); ?>


<div class="page-header news-single-header">
    <div class="page-header-overlay"></div>
    <h1 class="page-title">CONTACT</h1>
</div>

<section class="contact-1-section">
    <div class="contact-1-container">
        <p class="contact-1-description">下記フォームに必要事項をご入力してください。</p>
        
        <form class="contact-1-form">
            <div class="contact-1-form-group">
                <label class="contact-1-label">
                    お問い合わせ項目 <span class="contact-1-required">※</span>
                    <span class="contact-1-label-en">INQUIRY DETAILS *</span>
                </label>
                <div class="contact-1-checkbox-group">
                    <label class="contact-1-checkbox">
                        <input type="checkbox" name="inquiry_type[]" value="gardening">
                        ガーデニングについて
                    </label>
                    <label class="contact-1-checkbox">
                        <input type="checkbox" name="inquiry_type[]" value="exterior">
                        外構・造園工事について
                    </label>
                    <label class="contact-1-checkbox">
                        <input type="checkbox" name="inquiry_type[]" value="other">
                        その他
                    </label>
                </div>
            </div>

            <div class="contact-1-form-group">
                <label class="contact-1-label">
                    お名前 <span class="contact-1-required">※</span>
                    <span class="contact-1-label-en">Your Name *</span>
                </label>
                <input type="text" class="contact-1-input" required>
            </div>

            <div class="contact-1-form-group">
                <label class="contact-1-label">
                    お名前(フリガナ) <span class="contact-1-required">※</span>
                    <span class="contact-1-label-en">Name Reading *</span>
                </label>
                <input type="text" class="contact-1-input" required>
            </div>

            <div class="contact-1-form-group">
                <label class="contact-1-label">
                    メールアドレス <span class="contact-1-required">※</span>
                    <span class="contact-1-label-en">Mail Address *</span>
                </label>
                <input type="email" class="contact-1-input" required>
            </div>

            <div class="contact-1-form-group">
                <label class="contact-1-label">
                    メールアドレス(確認用) <span class="contact-1-required">※</span>
                    <span class="contact-1-label-en">Mail Address Confirm *</span>
                </label>
                <input type="email" class="contact-1-input" required>
            </div>

            <div class="contact-1-form-group">
                <label class="contact-1-label">
                    電話番号
                    <span class="contact-1-label-en">Phone Number</span>
                </label>
                <input type="tel" class="contact-1-input">
            </div>

            <div class="contact-1-form-group">
                <label class="contact-1-label">
                    お問い合わせの内容 <span class="contact-1-required">※</span>
                    <span class="contact-1-label-en">Mail Contents *</span>
                </label>
                <textarea class="contact-1-textarea" required></textarea>
            </div>

            <p class="contact-1-required-text">
                <span class="contact-1-required">※</span>
                は必須項目です。
                <span class="contact-1-required-text-en">Required *</span>
            </p>

            <div class="contact-1-submit-container">
                <button type="submit" class="contact-1-submit">メールを送信する</button>
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>
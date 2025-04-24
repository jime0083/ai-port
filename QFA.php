<?php
/*
Template Name: QFA
*/
get_header(); ?>

<div class="page-header access-header">
    <div class="page-header-overlay"></div>
    <h1 class="page-title">FAQ</h1>
</div>

<div class="faq-section ">
    <div class="faq-container">
        <h2 class="faq-heading">よくあるご質問</h2>
        <p class="faq-description">お客様から多く寄せられているご質問にお答えいたします。「よくあるご質問」で解決しない場合は、お問い合わせよりご連絡ください。</p>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-q">Q</span>
                    <p>小さな工事でもお願いできますか？</p>
                    <span class="faq-toggle">＋</span>
                </div>
                <div class="faq-answer">
                    <span class="faq-a">A</span>
                    <p>もちろん承っておりますので、お気軽にお問い合わせください。</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-q">Q</span>
                    <p>見積りや図面作成は有料ですか？</p>
                    <span class="faq-toggle">＋</span>
                </div>
                <div class="faq-answer">
                    <span class="faq-a">A</span>
                    <p>ご相談をいただいてから現場調査、プレゼンテーション、お見積りに至るまでのすべての工程を無料で行っており、3回以上続けてのプラン変更は1回につき25,000円(税別)の料金をいただいておりますが、ご契約を前提にお話を進めさせていただいておりますので、ご契約の際は修正料金は申し受けておりません。</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-q">Q</span>
                    <p>日中は留守がちなのですが、測量時や工期中は家にいる必要はありますか？</p>
                    <span class="faq-toggle">＋</span>
                </div>
                <div class="faq-answer">
                    <span class="faq-a">A</span>
                    <p>測量時や工期中の立ち合いは必要ありません。ご不在でも作業を進めさせていただきます。</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-q">Q</span>
                    <p>植木がすぐに枯れてしまった場合、対応してもらえますか？</p>
                    <span class="faq-toggle">＋</span>
                </div>
                <div class="faq-answer">
                    <span class="faq-a">A</span>
                    <p>施工後1年以内であれば、無償で植え替えを行います。ただし、お客様の管理不足による枯死の場合は対象外となります。</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span class="faq-q">Q</span>
                    <p>素敵なお庭を作っていただきました！でもメンテナンスができるか心配です・・・</p>
                    <span class="faq-toggle">＋</span>
                </div>
                <div class="faq-answer">
                    <span class="faq-a">A</span>
                    <p>定期的なメンテナンスプランもご用意しております。お客様のご要望に合わせて、最適なプランをご提案させていただきます。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-question');
    
    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            const toggle = item.querySelector('.faq-toggle');
            
            // 他の全てのアイテムを閉じる
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                if (otherItem !== parent && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-toggle').textContent = '＋';
                }
            });
            
            // クリックされたアイテムをトグル
            if (parent.classList.contains('active')) {
                parent.classList.remove('active');
                toggle.textContent = '＋';
            } else {
                parent.classList.add('active');
                toggle.textContent = '−';
            }
        });
    });
});
</script>

<?php get_footer(); ?>
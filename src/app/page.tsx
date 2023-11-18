"use client"
import Image from 'next/image';
import { getList } from '@/composables/microcms';
import { useEffect } from 'react';

export default async function Page() {
  useEffect(() => {
    // DOMが全て読み込まれてから動くよ
    const targets = document.getElementsByClassName('fade');
    for (let i = targets.length; i--;) {
      let observer = new IntersectionObserver((entries, observer) => {
        for (let j = entries.length; j--;) {
          if (entries[j].isIntersecting) {
            entries[j].target.classList.add('active');
            observer.unobserve(entries[j].target);
          }
        }
      });
      observer.observe(targets[i]);
    }
  })

  return (
    <div>
      {/* メインビジュアル　ここから */}
        <section id="mv">
          <div className="mv_wrapper_1 fade">
            <img src='/mv_cover1.png' className='mv_cv_img1' />
            <div className="mv_contents_wrapper_1">
              <h1>人生にエイガを。</h1>
              <h2>CINEMAX<br />SIDEVARG</h2>
            </div>
          </div>
          <div className="mv_wrapper_2">
            <div className="mv_contents_wrapper_2 fade">
              <h1>観る人も、撮る人も、<br />みんなが夢中になれる場所</h1>
              <p>mv_text</p>
            </div>
          </div>
        </section>
        {/* メインビジュアル　ここまで */}

        {/* サークル情報　ここから */}
        <section id="info">
            <div className="info_container">
                <div className="info_contents fade">
                  <div className="info_title">
                    <h2 className="info_h2">Information</h2>
                    <p>サークル情報</p>
                  </div>
                  <div className="info_message">
                    <table>
                      <tbody>
                        <tr>
                          <th>サークル名</th>
                          <td>circle_name</td>
                        </tr>
                        <tr>
                          <th>人数</th>
                          <td>members</td>
                        </tr>
                        <tr>
                          <th>代表</th>
                          <td>representative_name</td>
                        </tr>
                        <tr>
                          <th>設立</th>
                          <td>establish_year</td>
                        </tr>
                        <tr>
                          <th>新歓情報</th>
                          <td>welcom_party_info</td>
                        </tr>
                        <tr>
                          <th>入金方法</th>
                          <td>whoto_payment</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div className="info_images fade">
                  <img className="mv_cv_img" alt="info_images" width="100%" height="100%" src="./images/sidevarg5 1.png" />
                </div>
            </div>
        </section>
        {/* サークル情報　ここまで */}

        {/* ブログ一覧　ここから */}
        <section id="bloglist">
            <div className="blog_container fade">
            <div className="blogichiran_txt1">Blog</div>
            <div className="blogichiran_txt2">ブログ</div>

            <div className="bloglist_cards container">
            <div className="blogichiran_box1">
              <div className="blogichiran_div1">$postDate</div>
                <div className="blogichiran_div2">$postTitle</div>
                <div className="blogichiran_div3">
                  <img src="#" />
                </div>
                <div className="blogichiran_div4">
                  <p>$postBody</p>
                </div>
              </div>
            </div>
            <button className="bloglist_btn">
                ブログ一覧
                <i className="fas fa-angle-right fa-position-right"></i>
            </button>
            </div>
        </section>

        {/* ブログ一覧　ここまで */}

        {/* 各ブログここから */}
        <section id="eachblog">

        </section>
        {/* 各ブログここまで */}

        {/* ギャラリーここから */}
        <section id="gallery">
          <div className="gallery_container fade">
            <div className="gallery_title">
              <h1>Gallery</h1>
            </div>

            <div className="gallery_text">
              <h2>活動風景</h2>
            </div>
          </div>

          <div className="swiper-parent fade">
              {/* Swiper START */}
              <div className="swiper-container">
                  {/* メイン表示部分 */}
                  <div className="swiper-wrapper">
                      {/* 各スライド */}
                      <div className="swiper-slide">
                        <img src="#" alt="スライドショー" />
                      </div>
                  </div>
                  <div className="swiper-pagination"></div>
                  <div className="swiper-button-prev gallery_button_pc_only"></div>
                  <div className="swiper-button-next gallery_button_pc_only"></div>
              </div>
          </div>
          {/* Swiper END */}
        </section>
        {/* ギャラリーここまで */}

        {/* 活動日程ここから */}
        <section id="schedule">
            <div className="sidevarg-schedule fade">
                <div className="schedule-container">
                    <div className="schedule-contents">
                      <h1>Schedule</h1>
                      <h2>活動日程</h2>
                      <p>
                      隔週月曜18:20〜ミーティングで行い、月一の土日どちらかで上映会を開いています。
                      カレンダーに反映されていない活動詳細についてはTwitterやInstagramをご覧ください。
                      </p>
                    </div>
                    <div className="g-calendar">
                        <iframe
                        src="<?php echo get_post_meta( 1, 'googlecalendar_share', true); ?>"
                        style={{borderWidth: 0}}
                        width="100%"
                        height="100%"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
        {/* 活動日程ここまで */}

        {/* 活動場所ここから */}
        <section id="place">
            <div>
            <div className="place_contents fade">
              <div className="place_title">
              <h2 className="place_h2">Place</h2>
              <p>活動場所</p>
              </div>
              <div className="place_message">
              <p>
                主な活動場所は早稲田大学戸山キャンパス学生会館E910です。活動の詳細についてはTwitterやInstagramをご覧ください。
              </p>
              </div>
              <div id="button">
              <button className="place_btn" id="btn1">
                学生会館について
                <i className="fas fa-angle-right fa-position-right"></i>
              </button>
              <button className="place_btn" id="btn2">
                学生会館アクセス方法
                <i className="fas fa-angle-right fa-position-right"></i>
              </button>
            </div>
            </div>
            <div className="place_map fade">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.8379706399737!2d139.71545151525945!3d35.70560468018863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d1dc627dc3b%3A0xb8cb5ac09b074b5d!2z5pep56iy55Sw5aSn5a2mIOaIuOWxseOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sja!2sjp!4v1677062772945!5m2!1sja!2sjp"
                width="100%"
                height="450"
                style={{border: 0}}
                loading="lazy"
                ></iframe>
            </div>
            </div>
        </section>
        {/* 活動場所ここまで */}
    </div>
  )
}

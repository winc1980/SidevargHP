import type { Metadata } from 'next';
import './globals.css';

export const metadata: Metadata = {
  title: 'title name',
  description: 'description',
  icons: {
    icon: '@/app/favicon.ico'
  }
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="ja">
      <body>
        {/* ここからヘッダー */}
        <section id="header">
          <header>
            <div className="header_wrapper">
              <img className="header-logo" src="./images/logo.svg" alt="" />
              <h1 className="header-title">CINEMAX SIDEVARG</h1>
              <nav className="header-nav">
                <ul className="header-menu">
                  <li className="header-menu-item">
                    <a href="https://twitter.com/"
                      id="twitter" target="_blank" rel="noopener noreferrer">Twitter</a>
                  </li>
                  <li className="header-menu-item">
                    <a href="https://www.instagram.com/"
                      target="_blank" rel="noopener noreferrer">Instagram</a>
                  </li>
                  <li className="header-menu-item">
                    <a href="#">Blog</a>
                  </li>
                  <li className="header-menu-item">
                    <a id="contact" target="_blank" href="./official_line_link">
                      <span>Contact</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <div className="hamburger-menu">
              <input type="checkbox" id="menu-btn-check" />
              <label className="menu-btn"><span></span></label>
              <div className="menu-content">
                <ul>
                  <li><a target="_blank" href="https://twitter.com/>">Twitter</a></li>
                  <li><a target="_blank" href="https://www.instagram.com/">Instagram</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a target="_blank" href="#">Contact</a></li>
                  </ul>
              </div>
            </div>
          </header>
        </section>
        {/* ここまでヘッダー */}

        {/* コンテンツ */}
        {children}

        {/* ここからフッター */}
        <section id="footer">
          <div className="footer_wrapper">
            <div className="footer_contact">
              <p>
                お問い合わせは公式LINEにて受け付けております。<br />体験や入会、活動についてのご質問など、お気軽にお問い合わせください。
              </p>
              <a
                href="official_line_link"
                className="contact-btn"
                target="_blank"
              >
                <p>Contact</p>
              </a>
            </div>
            <div className="footer_link">
              <nav>
                <ul>
                  <li>
                    <a
                      href="https://www.instagram.com/"
                      target="_blank"
                    >
                      <img src="/instagram-logo.svg" alt="" />
                      Instagram
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/" target="_blank">
                      <img src="/twitter-logo.svg" alt="" />Twitter
                    </a>
                  </li>
                  <li>
                    <a href="official_line_link" target="_blank">公式LINE</a>
                  </li>
                  <li><a href="#">ブログ</a></li>
                </ul>

                <a href="#" id="footer_logo">CINEMAX<br />SIDEVARG</a>
              </nav>

              <div className="footer_copyright">
                <p>Copyright: CINEMAX SIDEVARG</p>
              </div>
            </div>
          </div>
        </section>
        {/* ここまでフッター */}
      </body>
    </html>
  );
}

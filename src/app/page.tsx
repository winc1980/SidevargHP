import Image from 'next/image';
import { getList } from '@/composables/microcms';

export default async function Page() {
  const data = await getList({ limit: 10 });
  return (
    <div className="container h-[100vh] mx-auto">
      <div className="grid grid-rows-3 gap-4 h-full">
        <div>
          <h1 className="text-xl mt-4">ブログ一覧ページ</h1>
        </div>
        <div className="flex flex-row justify-center">
          {/* 記事一覧表示　繰り返し */}
          {data.contents.map((article) => {
            return (
              <div className="w-[200px] h-[300px] rounded overflow-hidden shadow-lg mx-4">
                <img className="w-full h-[140px] object-cover" src={article.thumbnail?.url} />
                <div className="px-6 py-4">
                  <p className="font-bold text-xl mb-2">{article.title}</p>
                  <p className="text-gray-700 text-base">{article.description}</p>
                </div>
              </div>
            );
          })}
        </div>
        <div></div>
      </div>
    </div>
  );
}

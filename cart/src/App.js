import { useState } from "react";
import ShowCourses from "./components/ShowCourses";

import './App.css';

const App = () => {
  // set state Courses
  const [courses, setCourses] = useState([
    {
      pid: "o-fuda-family-safety",
      image: "path/to/image",
      category: "御神札",
      name: "御神札",
      type: ["家内安全"],
      color: ["赤", "黒"],
      price: 800
    },
    {
      pid: "o-fuda-yaku-yoke",
      image: "path/to/image",
      category: "御神札",
      name: "御神札",
      type: ["方除・魔除・赤札"],
      color: ["青", "赤", "白"],
      price: 500
    },
    {
      pid: "o-fuda-sen-ryu",
      image: "path/to/image",
      category: "御神札",
      name: "御神札",
      type: ["潜龍大神"],    
      color: ["黒地・青文字", "黒地・赤文字", "黒地・金文字"],
      price: 800
    }
  ]);

  const [cartCourses, setCartCourses] = useState([]);
  
	const addCourseToCart = (course) => {
    // console.log("input", course);
    // console.log("in cart", cartCourses);
    // console.log(alreadyCourses);
    // カートがすでに開かれているか否かで処理を変える。
    // 最初は`undefined`。次のクリックから選択した課目がオブジェクトで入っている。
		const alreadyCourses = cartCourses.find(item => item.pid === course.pid);
    // すでにカートに登録されている課目であれば追加する。
    if (alreadyCourses) {
      // 単純に追加してない。なかなか疑り深い。
      // 同じidだったらquantity=>数量を1つプラスする。それ以外は新規で追加。
      const latestCartUpdate = cartCourses.map(item =>
        item.pid === course.pid ? { ...item, quantity: item.quantity + 1 } : item
      );
      // 処理を済ませて、この状態で更新する。
      setCartCourses(latestCartUpdate);
    } else {
      // 同一商品がなければカートに追加する。
      setCartCourses([...cartCourses, {product: course, quantity: 1}]);
    }
  };


  return (
    <>
      <div className="App">
        <ShowCourses
          courses={courses}
          addCourseToCart={addCourseToCart}
        />
      </div>
    </>
  );
}

export default App;

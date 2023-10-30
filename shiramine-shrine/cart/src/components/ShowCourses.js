const ShowCourses = ({ courses, addCourseToCart }) => {
  return (
    <div className="courses-wrapper">
      {
        courses.map((course) => (
          <div className="course" key={course.pid}>
            <div className="frame">
              <img src={course.image} alt={course.type} key={course.image} />
            </div>
            <ul className="courses-list">
              <li key={course.name}><span>品名</span>{course.name}</li>
              <li>
                {course.type.map((t) => (
                  <div key={t}><span>種類</span>{t}</div>
                ))}
              </li>
              <li>
                {course.color.map((c) => (
                  <div className="color" key={c}><span>色</span>{c}</div>
                ))}
              </li>
              <li key={course.price}>{course.price}円</li>
            </ul>
            <button
              className="add-to-cart-button"
              onClick={() => addCourseToCart(course)}
            >
              カートに追加
            </button>
          </div>
        ))
      }
    </div>
  );
};

export default ShowCourses;
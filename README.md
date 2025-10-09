### PHẦN 1: TÓM TẮT VỀ WEBSITE

-   Bài tập lớn giữa kỳ môn Kĩ Thuật Phần Mềm là một dự án quan trọng nhằm rèn luyện kỹ năng thiết kế và xây dựng một trang web hoàn chỉnh, giải quyết các bài toán thực tiễn hoặc hỗ trợ hoạt động quản lý, kinh doanh như hệ thống bán hàng, quản lý kho, hoặc đặt lịch dịch vụ. Trong bài tập lớn này, quá trình phát triển được bắt đầu bằng việc phân tích yêu cầu, xác định rõ mục tiêu của hệ thống, nhu cầu của người dùng, cũng như các tính năng cần thiết để đáp ứng những yêu cầu đó.
-   Tiếp theo, chúng em tiến hành thiết kế giao diện với tiêu chí đơn giản, dễ sử dụng và thân thiện với người dùng, sử dụng HTML, CSS kết hợp với framework Tailwind để tối ưu trải nghiệm người dùng. Về mặt xử lý logic và phía server, đồ án sử dụng JavaScript thuần cho tương tác phía client và PHP với framework Laravel cho phần backend. Dữ liệu được lưu trữ và truy xuất hiệu quả thông qua hệ quản trị cơ sở dữ liệu MySQL.

### PHẦN 2: GIỚI THIỆU

-   Trong bối cảnh thương mại điện tử phát triển mạnh mẽ, đặc biệt là trong ngành thời trang và giày dép, việc sở hữu một website bán hàng chuyên nghiệp là yếu tố quan trọng để doanh nghiệp cạnh tranh và phát triển. Người tiêu dùng hiện đại không chỉ tìm kiếm sự tiện lợi mà còn yêu cầu trải nghiệm mua sắm trực tuyến đơn giản, nhanh chóng và đáng tin cậy.
-   Đề tài “Xây dựng trang web bán giày 2PSS Sneaker” được lựa chọn nhằm đáp ứng xu hướng thị trường hiện nay, giúp người dùng dễ dàng tiếp cận sản phẩm, đồng thời hỗ trợ doanh nghiệp quảng bá thương hiệu, mở rộng thị trường và tăng doanh số. Đây là một hướng đi phù hợp, thiết thực và giàu tiềm năng phát triển trong thời đại số hóa.

### PHẦN 3: PHÂN TÍCH VÀ THIẾT KẾ HỆ THỐNG

#### 3.1 Công nghệ sử dụng

##### 3.1.1 HTML, CSS

ML (HyperText Markup Language) là ngôn ngữ đánh dấu chuẩn dùng để mô tả cấu trúc của trang web hiển thị trên trình duyệt. CSS (Cascading Style Sheets) là ngôn ngữ thiết kế dùng để tạo kiểu dáng cho website như màu sắc, phông chữ, bố cục, khoảng cách và hiệu ứng. Ra đời năm 1996 bởi W3C, CSS giúp tách phần nội dung (HTML) và phần trình bày. HTML và CSS luôn đi kèm, trong đó HTML là khung nền, còn CSS tạo nên tính thẩm mỹ cho toàn bộ trang web.

##### 3.1.2 JavaScript

JavaScript (JS) là một ngôn ngữ lập trình mạnh mẽ và linh hoạt, thường được sử dụng để tăng tính tương tác cho các trang web. Ban đầu JS chủ yếu hoạt động ở phía trình duyệt (client-side), nhưng hiện nay còn được sử dụng rộng rãi ở phía máy chủ (server-side) thông qua nền tảng Node.js. JS thuộc nhóm ngôn ngữ động, không yêu cầu khai báo kiểu dữ liệu cố định, chạy được trên nhiều môi trường khác nhau, hỗ trợ lập trình hướng đối tượng và dễ dàng kết hợp với các thư viện, framework hiện đại như React, Angular, Vue ở giao diện người dùng, hay PHP Laravel ở phía backend.

##### 3.1.3 Laravel

Giới thiệu:  
 Laravel là một framework PHP mạnh mẽ, được thiết kế để phát triển các ứng dụng web hiện đại. Framework này tuân theo mô hình MVC (Model-View-Controller) và cung cấp nhiều công cụ tích hợp giúp lập trình viên làm việc nhanh chóng và hiệu quả.
Đặc điểm chính:

-   Mô hình MVC: Giúp tổ chức mã nguồn rõ ràng, tách biệt phần giao diện, xử lý logic và dữ liệu
-   Routing: Cung cấp hệ thống định tuyến linh hoạt để xử lý các yêu cầu HTTP một cách dễ dàng
-   Migration và ORM (Eloquent): Cho phép quản lý cơ sở dữ liệu có hệ thống và làm việc với dữ liệu như đối tượng
-   Blade Template Engine: Công cụ template mạnh mẽ, hỗ trợ xây dựng giao diện nhanh và dễ bảo trì
-   Bảo mật: Tích hợp sẵn các cơ chế bảo mật như mã hóa, CSRF token, phân quyền truy cập
-   Thư viện tích hợp: Hỗ trợ sẵn các chức năng như xác thực người dùng, gửi email, lưu cache và nhiều tiện ích khác

##### 3.1.4 MySQL

MySQL là một hệ quản trị cơ sở dữ liệu quan hệ (RDBMS) mã nguồn mở rất phổ biến, sử dụng ngôn ngữ SQL để lưu trữ, truy vấn và quản lý dữ liệu hiệu quả.
Đặc điểm chính

-   Hiệu suất cao: Được tối ưu hóa cho các ứng dụng xử lý khối lượng dữ liệu lớn
-   Mã nguồn mở: Miễn phí sử dụng và có thể tùy chỉnh, mở rộng theo nhu cầu
-   Hỗ trợ ACID: Đảm bảo tính toàn vẹn, nhất quán và an toàn trong các giao dịch dữ liệu
-   Đa nền tảng: Hoạt động trên nhiều hệ điều hành như Windows, Linux, macOS
-   Hỗ trợ phong phú: Tích hợp dễ dàng với nhiều ngôn ngữ lập trình như PHP, Java, Python.

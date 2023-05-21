import store from "../../store";
import axios from "axios";


// subscribe cho phép bạn đăng ký một hàm để theo dõi mọi thay đổi của store (state, mutations, actions, getters)
// Hàm được đăng ký sẽ được gọi sau khi một mutation đã được thực thi (commit) hoặc một action đã được gọi (dispatch) và trước khi mutation hoặc action đó kết thúc.
// Hàm được đăng ký nhận vào 2 tham số là mutation và state của store (hoặc action và state của store) và không có giá trị trả về.
// Ở đây subscribe sẻ được gọi sau khi mutation SET_TOKEN được commit (người dùng đăng nhập hoặc đăng xuất)


// Subscribe tới mutation SET_TOKEN để lưu token vào localStorage và header của axios khi token thay đổi (người dùng đăng nhập hoặc đăng xuất)
store.subscribe((mutation, state) => {
    console.log('mutation',mutation);
    switch (mutation.type) { // mutation.type là tên của mutation được commit (SET_TOKEN)
        case "SET_TOKEN":
            if (mutation.payload) {
                // Lưu token vào localStorage và header của axios khi token thay đổi (người dùng đăng nhập )
                axios.defaults.headers.common["Authorization"] = "Bearer " + mutation.payload;
                localStorage.setItem("token", mutation.payload);
            } else {
                // Xoá token khỏi localStorage và header của axios khi token thay đổi (người dùng đăng xuất)
                axios.defaults.headers.common["Authorization"] = null;
                localStorage.removeItem("token");
            }
            break;
    }
});

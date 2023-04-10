import store from "../../store";
import axios from "axios";


// Subscribe to store mutations and save token to localStorage
store.subscribe((mutation, state) => {
    console.log(mutation);
    switch (mutation.type) {
        case "SET_TOKEN":
            if (mutation.payload) {
                axios.defaults.headers.common["Authorization"] =
                    "Bearer " + mutation.payload;
                localStorage.setItem("token", mutation.payload);
            } else {
                axios.defaults.headers.common["Authorization"] = null;
                localStorage.removeItem("token");
            }
            break;
    }
}
);

document.addEventListener('alpine:init', () => {

    Alpine.data('hello', () => ({
        message: 'i luph alpine',
    })),

    // Alpine.data('header', () => ({
    //     message: 'i luph alpine',
    // })),

    // Alpine.data('getstarted', () => ({
    //     message: 'i luph alpine',
    // })),

    // Alpine.data('footer', () => ({
    //     message: 'i luph alpine',
    // }))

    Alpine.data('users', () => ({
        role: null,

        setRole(value)
        {
            localStorage.setItem('role', value)
        },

        getRole(){
            // Api fetch User loged in

            //meyimpan ke localStorage
            localStorage.setItem('role', 'customer')
            //Mengambil data dari localstorage
            // localStorage.getItem('role')

            this.role = localStorage.getItem('role')

        },

        //menghapus data dari localstorage

        deleteRole()
        {
            // menghapus data dari localStorage berdasarkan key
            localStorage.removeItem('role')
            //menghapus semua data dari localstorage
            // localStorage.clear()
        }

    }))

    // movies data

    Alpine.data('movies', () => ({
        baseUrl: 'https://imdb8.p.rapidapi.com',
        api: 'fa8946b5e6msh517be52504e13e6p189bd2jsn06062a93600d',
        listMovies: [],

        async getMovies()
        {
            //fetch api
            var response = await fetch(this.baseUrl + '/auto-complete?q=game of thr', {
                method: 'GET',
                
                headers: {
                    'X-RapidAPI-Key': this.apiKey,
                    'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
                  }
            })
        }

    }))

    // consume response api
    console.log("response", response)

} )
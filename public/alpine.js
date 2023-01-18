document.addEventListener('alpine:init', async () => {

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
        api: 'e8ca1aa3c0msh13242a9573852c3p1dc2bdjsn5162c0ed1793',
        listMovies: [],
        isLoading: false,

        async getMovies(searchKey)
        {

            this.isLoading = true

            //fetch api
            // var searchKey = this.$wire.searchKey ?? 'marvel'
            var response = await fetch(this.baseUrl + `/auto-complete?q=${searchKey}`, {
                method: 'GET',

                headers: {
                    'X-RapidAPI-Key': this.api,
                    'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
                  }
            })
            // consume response api
            // console.log("response1", response)

            response = await response.json();
            // var responseJson = await response.json()

            // console.log("response2", response)

            this.listMovies = response.d
            // console.log("listMovie", this.listMovie)

            // loading done
            this.isLoading = false

        }

    }))

} )

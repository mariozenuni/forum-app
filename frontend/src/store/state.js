export default {
  user: {
    token: sessionStorage.getItem('TOKEN'),
    data: {}
  },
 
  users: {
    loading: false,
    data: [],
    links: [],
    from: null,
    to: null,
    page: 1,
    limit: null,
    total: null
  },
  discussions: {
    loading: false,
    data: [],
    links: [],
    from: null,
    to: null,
    page: 1,
    limit: null,
    total: null
  },
  channels: {
    loading: false,
    data: [],
    links: [],
    from: null,
    to: null,
    page: 1,
    limit: null,
    total: null
  },

}

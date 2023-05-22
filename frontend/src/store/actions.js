import axiosClient from "../axios";

export function getCurrentUser({commit}, data) {
  return axiosClient.get('/user', data)
    .then(({data}) => {
      commit('setUser', data);
      return data;
    })
}

export function login({commit}, data) {
  return axiosClient.post('auth/login', data)
    .then(({data}) => {
      commit('setUser', data.user);
      commit('setToken', data.token)
      return data;
    })
}

export function logout({commit}) {
  return axiosClient.post('/logout')
    .then((response) => {
      commit('setToken', null)

      return response;
    })
}

export function addChannels({commit}, data) {
  return axiosClient.post('channels', data)
    .then(({data}) => {
  
      return data;
    })
}
export function addDiscussion({commit}, data) {
  return axiosClient.post('discussions', data)
    .then(({data}) => {
      return data;
    })
}



export function getDiscussions({commit}) {
  commit('setDiscussions',[true]);
  return axiosClient.get('discussions')
    .then((res) => {
   
      commit('setDiscussions', [false,res.data]);
      return res.data;
    })
    .catch(()=>{
      commit('setDiscussions', [false])

    })
}

export function getChannels({commit}) {
  commit('setChannels',[true])
  return axiosClient.get('channels')
    .then((res) => {
    commit('setChannels', [false,res]);
    return res.data;
    })
    .catch(()=>{
      commit('setChannels', [false])

    })
}




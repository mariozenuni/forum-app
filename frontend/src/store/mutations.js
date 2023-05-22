
export function setUser(state, user) {
  state.user.data = user;
}
export function setDiscussions(state,[loading, data] ) {
  state.discussions.loading = loading;
  state.discussions.data = data;
}
export function setChannels(state,[loading, data] ) {
  state.channels.loading = loading; 
  state.channels.data = data;
}

export function setToken(state, token) {
  state.user.token = token;
  if (token) {
    sessionStorage.setItem('TOKEN', token);
  } else {
    sessionStorage.removeItem('TOKEN')
  }
}


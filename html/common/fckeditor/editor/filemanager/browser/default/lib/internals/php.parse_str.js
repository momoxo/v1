function parse_str(C,a){var Z,R,x,k,d=/\[(.*?)\]/g;C=decodeURI(C.toString()).replace(/\+/g," ").split("&");function S(H,W,j,G){var s,z=d.exec(G);if(z!=null){s=z[1];if(typeof (H[W])=="undefined"){H[W]=[];}arguments.callee(H[W],s||H[W].length.toString(),j,G);return ;}H[W]=j;}for(Z=0,R=C.length;Z<R;Z++){x=C[Z].split("="),k=x[0].indexOf("[");S(a||this,(0<=k)?x[0].slice(0,k):x[0],decodeURIComponent(x[1]),x[0]);}}
function jsmarty_function_html_select_date(d,q){var ub=q.plugins_dir,y=JSmarty.Plugin;var G=y.get("php.range");var P=y.get("php.sprintf");var Z=y.get("php.strftime");var s=y.get("function.html_options",ub);var Y=y.get("shared.escape_special_chars",ub);var e,t=0,l=0,R,p,S,f=new JSmarty.Classes.Buffer();var z,v,V,c,I,w,F;var N=new Date().getTime();var g="Date_";var K=null;var md=Z("%Y");var x=null;var b=null;var M=null;var o=null;var Q=null;var j=md;var B="%02d";var a=null;var r=null;var C=null;var H=null;var O="MDY";var J=null;var E="";var m=null;var T=true;var u="%B";var U=false;var L=true;var A=false;var h=true;var X="\n";var W="%d";var D="%m";for(l in d){if(!d.hasOwnProperty(l)){continue;}switch(l){case "prefix":g=d[l];break;case "time":N=d[l];break;case "start_year":j=d[l];break;case "end_year":md=d[l];break;case "month_format":u=d[l];break;case "day_format":B=d[l];break;case "day_value_format":W=d[l];break;case "field_array":H=d[l];break;case "day_size":K=d[l];break;case "month_size":r=d[l];break;case "year_extra":C=d[l];break;case "field_order":O=d[l];break;case "field_separator":X=d[l];break;case "month_value_format":D=d[l];break;case "month_empty":m=d[l];break;case "day_empty":b=d[l];break;case "year_empty":a=d[l];break;case "all_empty":x=d[l];b=m=a=x;break;case "display_days":T=d[l];break;case "display_months":h=d[l];break;case "display_years":L=d[l];break;case "year_as_text":U=d[l];break;case "reverse_years":A=d[l];break;default:break;}}if(N.match&&N.match(/^-\d+$/)){N=date("Y-m-d",N);}if(!(N.match&&N.match(RegExp("^d{0,4}-d{0,2}-d{0,2}$")))){N=Z("%Y-%m-%d",new Date(N).getTime());}N=N.split("-");if(match=md.match(/^(\+|\-)\s*(\d+)$/)){if(match[1]=="+"){md=Z("%Y")+match[2];}else{md=Z("%Y")-match[2];}}if(match=j.match(/^(\+|\-)\s*(\d+)$/)){if(match[1]=="+"){j=Z("%Y")+match[2];}else{j=Z("%Y")-match[2];}}if(N[0].length>0){if(j>N[0]&&!d.start_year){j=N[0];}if(md<N[0]&&!d.end_year){md=N[0];}}O=O.toUpperCase();if(h){R=new JSmarty.Classes.Buffer();e=0,V=[],c=[];if(m){V[0]=m;c[0]="",e++;}for(l=0;l<12;l++){V[e+l]=Z(u,new Date(2000,l).getTime());c[e+l]=Z(D,new Date(2000,l).getTime());}R.append("<select name=");R.appendIf(H)("\"",g,"Month\"");R.appendIf(!H)("\"",H,"["+g+"Month]\"");R.appendIf(r)(" size=\"",r,"\"");R.appendIf(J)(" ",o);R.append(E,">\n");R.append(s({output:V,values:c,selected:N[1]?Z(D,new Date(2000,N[1]-1).getTime()):""},q));R.append("\n</select>");}if(T){p=new JSmarty.Classes.Buffer();e=0,z=[],v=[];if(b){z[0]=b;v[0]="",e++;}for(l=0;l<31;l++){z[e+l]=P(B,l+1);v[e+l]=P(W,l+1);}p.append("<select name=");p.appendIf(H)("\"",H,"[",g,"Day]\"");p.appendIf(!H)("\"",g,"Day\"");p.appendIf(K!==null)(" size=\"",K,"\"");p.appendIf(o!==null)(" ",o);p.appendIf(Q!==null)(" ",Q);p.append(E,">\n");p.append(s({output:z,values:v,selected:N[2]},q));p.append("\n</select>");}if(L){S=new JSmarty.Classes.Buffer();F=(H)?H+"["+g+"Year]":g+"Year";if(U){S.append("<input type=\"text\" name=\"",F,"\" value=\"",N[0],"\" size=\"4\" maxlength=\"4\"");S.appendIf(o!==null)(" ",o);S.appendIf(C!==null)(" ",C);S.append(" />");}else{I=G(parseInt(j),parseInt(md));(A)?I.reverse():I.sort();w=y.get("core.copy_array")(I);if(a){I.unshift(a);w.unshift("");}S.append("<select name=\"",F,"\"");S.appendIf(M!==null)(" size=\"",M,"\"");S.appendIf(o!==null)(" ",C);S.append(E,">\n");S.append(s({output:I,values:w,selected:N[0]},q));S.append("\n</select>");}}for(t=0;t<=2;t++){switch(O.charAt(t)){case "D":f.append(p.toString());break;case "Y":f.append(S.toString());break;case "M":f.append(R.toString());break;}}return f.toString(X);}
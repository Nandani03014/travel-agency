(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([["81077"],{437566:function(e,n,a){var i,l,t,r;a.r(n),a.d(n,{default:()=>o});let s={argumentDefinitions:[],kind:"Fragment",metadata:null,name:"BoardRep_board",selections:[{alias:"boardAccess",args:null,kind:"ScalarField",name:"access",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"archivedByMeAt",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"boardOrderModifiedAt",storageKey:null},{alias:null,args:null,concreteType:null,kind:"LinkedField",name:"collaboratingUsers",plural:!1,selections:[{kind:"InlineFragment",selections:[i={alias:null,args:null,kind:"ScalarField",name:"__typename",storageKey:null},{alias:null,args:null,concreteType:"UserCollaboratingUsersConnection",kind:"LinkedField",name:"connection",plural:!1,selections:[{alias:null,args:null,concreteType:"UserCollaboratingUsersEdge",kind:"LinkedField",name:"edges",plural:!0,selections:[{alias:null,args:null,concreteType:"User",kind:"LinkedField",name:"node",plural:!1,selections:[i,l={alias:null,args:null,kind:"ScalarField",name:"entityId",storageKey:null}],storageKey:null}],storageKey:null}],storageKey:null}],type:"UserCollaboratingUsersConnectionContainer",abstractKey:null}],storageKey:null},{alias:null,args:null,concreteType:"CoverPin",kind:"LinkedField",name:"coverPin",plural:!1,selections:[{alias:null,args:null,kind:"ScalarField",name:"crop",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"size",storageKey:null}],storageKey:null},l,{alias:null,args:null,kind:"ScalarField",name:"followedByMe",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"hasCustomCover",storageKey:null},{alias:"images170x",args:[{kind:"Literal",name:"spec",value:"170x"}],concreteType:"ImageDetails",kind:"LinkedField",name:"images",plural:!0,selections:r=[t={alias:null,args:null,kind:"ScalarField",name:"url",storageKey:null}],storageKey:'images(spec:"170x")'},{alias:"images236x",args:[{kind:"Literal",name:"spec",value:"236x"}],concreteType:"ImageDetails",kind:"LinkedField",name:"images",plural:!0,selections:r,storageKey:'images(spec:"236x")'},{alias:null,args:null,kind:"ScalarField",name:"isCollaborative",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"isTemporarilyDisabled",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"name",storageKey:null},{alias:null,args:null,concreteType:"User",kind:"LinkedField",name:"owner",plural:!1,selections:[l,{args:null,kind:"FragmentSpread",name:"BoardCard_user"}],storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"pinCount",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"pinThumbnailUrls",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"privacy",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"sectionCount",storageKey:null},{alias:null,args:null,concreteType:"SensitivityScreen",kind:"LinkedField",name:"sensitivityScreen",plural:!1,selections:[{alias:null,args:null,kind:"ScalarField",name:"reason",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"showWarning",storageKey:null}],storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"shouldShowBoardCollaborators",storageKey:null},{alias:null,args:null,kind:"ScalarField",name:"type",storageKey:null},t,{args:null,kind:"FragmentSpread",name:"useGetCoverPhoto_board"}],type:"Board",abstractKey:null};s.hash="08dc7cb76d98b372522a348ab8acda69";let o=s},763538:function(e,n,a){a.d(n,{YS:()=>s,eF:()=>o,m_:()=>r});var i=a(465989),l=a(236269),t=a(767415);function r(e,n,a,l,r){let s=new URLSearchParams,o=n.reduce((e,n)=>{if(null!=n){let a=function(e){let n;try{n=decodeURIComponent(e)}catch(a){n=e}n.startsWith("http")?n.startsWith("http://")&&(n=n.replace("http://","https://")):n="https://"+n;try{return new URL(n).origin}catch(i){let a=n.match(/^(https?:\/\/[^\/]+)(\/|$)/);if(a&&a.length>1)return a[1];return e}}(n);return e.add(a)}return e},new Set);s.append(i.NR.SOURCE_EVENT_ID,e??"0"),s.append(i.NR.DESTINATION,JSON.stringify([...o])),s.append(i.NR.EXPIRY,a?i.uV:i.ug),s.append(i.NR.PRIORITY,a?i.NR.CLICK_PRIORITY:i.NR.VIEW_PRIORITY),r&&s.append(i.NR.ADVERTISER_ID,r),l&&s.append(i.NR.CAMPAIGN_ID,l),s.append(i.NR.SOURCE_EVENT_TYPE,a?i.bC:i.Cu);try{let{hostname:e}=new URL(window.location.href);"www.pinterest.com"!==e&&s.append(i.NR.HOSTNAME,e)}catch(e){(0,t.nP)("webapp.arapi.generateARASourceEventURL",{sampleRate:.1,tags:{status:"failed",href:window&&window.location&&window.location.href}})}return"https://www.pinterest.com/attribution_source/?"+s.toString()}async function s(e,n,a,i,s,o,d,u,c){let p;let{appType:g,osType:m}=o||{},h="",_="";if(["Pin","pinImpressions"].includes(e)&&n&&(i||u||c)){(0,t.nP)("webapp.arapi.view.funnel",{sampleRate:.1,tags:{status:"start",appType:g,osType:m}});try{if(!window.document.featurePolicy?.allowsFeature("attribution-reporting")){(0,t.nP)("webapp.arapi.view.funnel",{sampleRate:.1,tags:{status:"skipped",message:"attribution-reporting is not enabled",appType:g,osType:m}});return}h=r(a,[i,u,c],!1,s,d);try{_=new URL(window.location.href).hostname}catch(e){(0,t.nP)("webapp.arapi.view.funnel",{sampleRate:.1,tags:{status:"hostname_parse_failed",href:window&&window.location&&window.location.href}})}if(_&&"www.pinterest.com"!==_)document.createElement("img").setAttribute("attributionsrc",h),(0,t.nP)("webapp.arapi.view.funnel",{sampleRate:.1,tags:{status:"international",appType:g,osType:m,hostname:_}});else if(!(p=await window.fetch(h,{keepalive:!0,attributionReporting:{eventSourceEligible:!0,triggerEligible:!1}})).ok)throw Error("server request failed.");(0,t.nP)("webapp.arapi.view.funnel",{sampleRate:.1,tags:{status:"success",appType:g,osType:m}})}catch(e){(0,t.nP)("webapp.arapi.view.funnel",{sampleRate:.1,tags:{status:"failed",error:(0,l.Z)(e,"name"),message:(0,l.Z)(e,"message"),appType:g,osType:m,hostname:_,responseStatus:p&&p.status}})}}else(0,t.nP)("webapp.arapi.view.funnel",{sampleRate:.1,tags:{status:"missing_param",appType:g,osType:m}})}function o(e){if(e){let n=e.toLowerCase();if(n.includes("windows"))return"windows xp"===n?1:"windows vista"===n?2:"windows 7"===n?3:"windows 8"===n?4:12;if(n.includes("mac os"))return 5;if(n.includes("android"))return 7;if(n.includes("ios"))return 6;if(n.includes("ubuntu"))return 8;if(n.includes("chromium os"))return 13}return 0}},343669:function(e,n,a){a.d(n,{G6:()=>t,i7:()=>r,oi:()=>i,u$:()=>l,un:()=>o,vU:()=>s,w1:()=>d});let i=Object.freeze({OTHER:0,CHROME:1,SAFARI:2,IE:3,FIREFOX:4,OPERA:5,EDGE:6}),l=e=>e?e.includes("Chrome")?i.CHROME:e.includes("Safari")?i.SAFARI:e.includes("Firefox")?i.FIREFOX:e.includes("Opera")?i.OPERA:e.includes("IE")?i.IE:e.includes("Edge")?i.EDGE:i.OTHER:i.OTHER;function t(e){return l(e)===i.SAFARI}function r(e){return l(e)===i.CHROME}function s(e){return l(e)===i.FIREFOX}function o(e){return l(e)===i.EDGE}function d(e){return l(e)===i.IE}},28031:function(e,n,a){a.d(n,{Z:()=>o});var i=a(667294);function l(e){return window.addEventListener("resize",e),()=>window.removeEventListener("resize",e)}function t(){return window.innerWidth}function r(){return window.innerHeight}function s(){return null}function o(){let e=(0,i.useSyncExternalStore)(l,r,s),n=(0,i.useSyncExternalStore)(l,t,s);return null!==e&&null!==n?{height:e,width:n}:null}},149238:function(e,n,a){a.d(n,{P:()=>t,Z:()=>l});var i=a(581722);function l(e){return e?.[1000069]&&500417===e[1000069].experience_id&&e[1000069].display_data.hide_footer}function t(){let e=(0,i.v9)(({experiences:e})=>e);return!!e&&l(e)}},309266:function(e,n,a){a.d(n,{Z:()=>r});var i=a(581722);let l=[1000069,1000075],t={};function r(){var e;return e=(0,i.v9)(({experiences:e})=>e),l.forEach(n=>{e[n]&&(void 0===t[n]||t[n].id!==e[n].id)&&(t[n]=e[n])}),t}},281213:function(e,n,a){a.d(n,{W:()=>u,r:()=>d});var i=a(667294),l=a(230201),t=a(213491),r=a(613567),s=a(785893);let{Provider:o,useHook:d}=(0,t.Z)("VideoPlayer");function u({children:e}){let{logContextEvent:n,logImpression:a}=(0,l.v)(),{checkExperiment:t}=(0,r.F)(),[d,u]=(0,i.useState)(!1),[c,p]=(0,i.useState)([]),[g,m]=(0,i.useState)([]),[h,_]=(0,i.useState)({}),b=t("web_ads_mrc_video_impression").anyEnabled,y=e=>{_(n=>({...n,[e]:!0}))},f=(0,i.useCallback)(e=>{if(18===e.event_type&&e.event_data?.pinImpressions?.length){let{isNativeVideoAndWatchable:n}=e.event_data.pinImpressions[0],a=JSON.stringify(e.aux_data?.commerce_data||"").includes("story_pin_id");b&&(n||a)&&p(n=>[...n,e].slice(-1e3))}},[b]),w=(0,i.useCallback)(e=>{18===e.eventType&&b&&m(n=>[...n,e].slice(-1e3))},[b]),v=e=>{let{time:n}=e.event_data.pinImpressions[0];return{...e,event_data:{...e.event_data,pinImpressions:[{...e.event_data.pinImpressions[0],isMrcBtr:!0,endTime:n,renderDuration:0}]}}},E=e=>{if(e.eventData){let{time:n}=e.eventData;return{...e,eventData:{...e.eventData,isMrcBtr:!0,endTime:n??0}}}return null};(0,i.useEffect)(()=>{let e=c.filter(e=>{let{pinIdStr:a}=e.event_data.pinImpressions[0];return!h[a]||!b||(n(v(e)),!1)});e.length!==c.length&&p(e)},[c,b,n,h]),(0,i.useEffect)(()=>{let e=g.filter(e=>{let n=e.eventData?.pinIdStr;if(!n)return!1;if(h[n]&&b){let n=E(e);return n&&a(n),!1}return!0});e.length!==g.length&&m(e)},[g,b,a,h]);let S=(0,i.useMemo)(()=>({captionsEnabled:d,logMrcVideoAdImpressionOnPlay:w,logMrcVideoAdEventOnPlay:f,setCaptionsEnabled:u,setVideoPlayed:y,videosPlayed:h}),[d,f,w,h]);return(0,s.jsx)(o,{value:S,children:e})}},662911:function(e,n,a){a.r(n),a.d(n,{BOARD_REP_PADDING_DWEB:()=>v,BOARD_REP_PADDING_MWEB:()=>E,default:()=>S});var i,l=a(581722);a(167912);var t=a(883119),r=a(104999),s=a(907022),o=a(774838),d=a(865043),u=a(736328),c=a(739405),p=a(462867),g=a(143677),m=a(422913),h=a(214451),_=a(701572),b=a(914253),y=a(785893);let f=void 0!==i?i:i=a(437566),w=["thumbnail","imageOnly"],v=2,E=3;function S({boardKey:e,component:n,containerBackgroundColor:a,display:i="responsive",forwardedRef:S,fullSize:R,hideSecretBoardIcon:I=!1,isAttributionHeightUnfixed:F=!1,isCollaboratorsAttributionVisible:P=!1,isFeaturedBoardsModule:L=!1,isNoBoardTitleStyle:k=!1,noPaddings:C=!1,showFollowButton:G=!0,showMask:D=!1,showPinCount:x=!0,slotIndex:A,type:B,viewObjectIdStr:O,viewParameter:T,viewType:K,isBoardPreviewEnabled:U}){let M=(0,p.Z)(),N=M&&M.isAuth,Q=(0,l.I0)(),{locale:Z}=(0,o.B)(),H=(0,u.Z)(),W=(0,s.Z)(f,e),j=(0,b.gC)(),Y=W?.entityId?j(W.entityId):null,z=(0,m.Z)(W),q=(0,r.Z)(),V=(0,c.HG)();if(!W)return null;let{owner:X,shouldShowBoardCollaborators:$}=W,J=M.isAuth?M.id:"",ee=X?.entityId===J,en=W.collaboratingUsers?.__typename==="UserCollaboratingUsersConnectionContainer"?W.collaboratingUsers.connection?.edges:[],ea=en?.some(e=>e?.node?.entityId===J)||ee;if("secret"===W.privacy&&!ea)return null;let ei="grid"===B||"thumbnail"===B?2:4,el=U&&W.images236x?.[0]?.url?W.images236x?.[0]?.url:z(ei),et=W.coverPin??Y?.cover_pin,er=(et?.crop&&et?.size&&{x:et?.crop[0]??0,y:et?.crop[1]??0,width:et?.size[0]??0,height:et?.size[0]??0})??{x:0,y:0,width:0,height:0},es={isCustom:!U&&(W.hasCustomCover||void 0),url:el,position:er},eo=W.pinThumbnailUrls??Y?.pin_thumbnail_urls,ed=(0,h.Jx)(W.images170x,eo?.filter(e=>null!==e)??void 0,el).map(({url:e})=>({name:(0,h.po)(e),url:e})),eu=[44,49].includes(T)||[3,442,625].includes(K),ec=()=>49===T?ee?3106:3107:T,ep=W?.sensitivityScreen?{reason:W.sensitivityScreen?.reason,showWarning:W.sensitivityScreen?.showWarning}:void 0,eg=W.pinCount??Y?.pin_count??0,em=W.sectionCount??Y?.section_count??0,eh=(0,y.jsx)(g.Z,{archivedDate:W.archivedByMeAt??Y?.archived_by_me_at,boardId:W.entityId,canEdit:!!W.boardAccess&&W.boardAccess.includes("write"),containerBackgroundColor:a,coverPhoto:es,display:i,followedByMe:!!(Y?.followed_by_me??W.followedByMe),fullSizeDrawer:R,hideMeta:w.includes(B),hideSecretBoardIcon:I,id:W.entityId,imagesLego:ed,isAttributionHeightUnfixed:F,isAuthenticated:N,isCollaborative:!!W.isCollaborative,isCollaborator:!!ea,isCollaboratorsAttributionVisible:P,isFeaturedBoardsModule:L,isNoBoardTitleStyle:k,isOwner:ee,isProtected:"protected"===W.privacy||Y?.privacy==="protected",isSecret:"secret"===W.privacy||Y?.privacy==="secret",isTemporarilyDisabled:!!W.isTemporarilyDisabled||!!Y?.is_temporarily_disabled,lastModifiedDate:W.boardOrderModifiedAt??Y?.board_order_modified_at??"",layout:V?"square":void 0,locale:Z,metaMarginTop:2,metaPaddingY:0,name:W.name??(Y?.name||""),numberOfCollaborators:en?.length??0,numCols:ei,onFollow:e=>Q((0,_.Z)(e,q)),onUnfollow:e=>Q((0,_.f)(e,q)),pinCount:x&&eg?eg:void 0,sectionCount:em??0,sensitivityScreen:ep,showBoardCollaborators:!1!==$,showFollowButton:G,showMask:D,slotIndex:A,userKey:W?.owner,viewerId:J,viewObjectIdStr:O,viewParameter:T,viewType:K}),e_=W.url||Y?.url;return!w.includes(B)&&e_?(0,y.jsx)(t.Tg,{href:N?e_:e_.toLowerCase(),onTap:()=>{eu&&q({aux_data:{board_id:W.entityId,board_pin_count:eg,board_section_count:em},component:n??1,element:36,event_type:102,view_parameter:ec(),view_data:{view_object_id_str:O}}),N||((0,d.NC)("click_go_to_board"),H({action:"click",item:"board-card"}))},rounding:2,tapStyle:"compress",children:(0,y.jsx)(t.xu,{ref:S,paddingY:C?0:V?v:E,children:eh})}):eh}},2061:function(e,n,a){a.d(n,{Yg:()=>o,ib:()=>u,nF:()=>p,xX:()=>c});var i=a(613567),l=a(774838),t=a(739405),r=a(767415);let s=({checkExperiment:e})=>{let{group:n}=e("auth_mweb_graphql_pin_page",{dangerouslySkipActivation:!0});return{logStat:(e,a)=>(0,r.nP)("webapp.graphql.debug_auth_mweb_graphql_pin_page",{sampleRate:1,tags:{event:e,group:n,...a}})}},o=()=>{let{isAuthenticated:e}=(0,l.B)(),n=(0,t.HG)(),{checkExperiment:a}=(0,i.F)();return e&&!n?s({checkExperiment:a}):{logStat:()=>{}}},d=0,u=({checkExperiment:e,isAuthMweb:n})=>{if(!n)return;let{logStat:a}=s({checkExperiment:e});(d+=1)<10&&a(`repin_${d}`)};function c({checkExperiment:e,isDesktop:n,isAuthenticated:a}){if(!a)return{isGraphQLEnabledInGeneral:!0,isGraphQLEnabledForRelatedPins:!0,closeupPageSuspenseBehavior:"SuspendOnMissingData",isImpressionFixEnabled:!1,addRelatedPinsLatency:!1};if(n){let{anyEnabled:n}=e("auth_dweb_graphql_pin_page");return{isGraphQLEnabledForRelatedPins:n,isGraphQLEnabledInGeneral:n,closeupPageSuspenseBehavior:null,isImpressionFixEnabled:!1,addRelatedPinsLatency:!1}}{let{anyEnabled:n,group:a}=e("auth_mweb_graphql_pin_page");switch(a){case"control":return{isGraphQLEnabledInGeneral:!1,isGraphQLEnabledForRelatedPins:!1,closeupPageSuspenseBehavior:null,isImpressionFixEnabled:!1,addRelatedPinsLatency:!1};case"only_impression_fix":return{isGraphQLEnabledInGeneral:!1,isGraphQLEnabledForRelatedPins:!1,closeupPageSuspenseBehavior:null,isImpressionFixEnabled:!0,addRelatedPinsLatency:!1};case"enabled":return{isGraphQLEnabledInGeneral:!0,isGraphQLEnabledForRelatedPins:!0,closeupPageSuspenseBehavior:"SuspendOnMissingData",isImpressionFixEnabled:!1,addRelatedPinsLatency:!1};case"enabled_and_impression_fix":return{isGraphQLEnabledInGeneral:!0,isGraphQLEnabledForRelatedPins:!0,closeupPageSuspenseBehavior:"SuspendOnMissingData",isImpressionFixEnabled:!0,addRelatedPinsLatency:!1};case"only_related_pins":return{isGraphQLEnabledInGeneral:!1,isGraphQLEnabledForRelatedPins:!0,closeupPageSuspenseBehavior:null,isImpressionFixEnabled:!1,addRelatedPinsLatency:!1};case"only_related_pins_and_impression_fix":return{isGraphQLEnabledInGeneral:!1,isGraphQLEnabledForRelatedPins:!0,closeupPageSuspenseBehavior:null,isImpressionFixEnabled:!0,addRelatedPinsLatency:!1};case"should_render_with_missing_data":return{isGraphQLEnabledInGeneral:!0,isGraphQLEnabledForRelatedPins:!0,closeupPageSuspenseBehavior:"RenderWithMissingData",isImpressionFixEnabled:!1,addRelatedPinsLatency:!1};case"render_and_subscribe":return{isGraphQLEnabledInGeneral:!0,isGraphQLEnabledForRelatedPins:!0,closeupPageSuspenseBehavior:"RenderWithMissingDataAndSubscribe",isImpressionFixEnabled:!1,addRelatedPinsLatency:!1};case"add_related_pins_latency":return{isGraphQLEnabledInGeneral:!1,isGraphQLEnabledForRelatedPins:!1,closeupPageSuspenseBehavior:null,isImpressionFixEnabled:!1,addRelatedPinsLatency:!0};default:return{isGraphQLEnabledInGeneral:n,isGraphQLEnabledForRelatedPins:n,closeupPageSuspenseBehavior:n?"SuspendOnMissingData":null,isImpressionFixEnabled:!1,addRelatedPinsLatency:!1}}}}function p(){let{checkExperiment:e}=(0,i.F)(),n=(0,t.HG)(),{isAuthenticated:a}=(0,l.B)();return c({checkExperiment:e,isDesktop:n,isAuthenticated:a})}},701572:function(e,n,a){a.d(n,{Z:()=>t,f:()=>r});var i=a(681698),l=a(160587);function t(e,n){return async a=>{a((0,l.md)(e,!0));try{await (0,i.Z)({url:`/v3/boards/${e}/follow/`,method:"PUT"}),n({event_type:26,object_id_str:e})}catch(n){a((0,l.md)(e,!1))}}}function r(e,n){return async a=>{a((0,l.md)(e,!1));try{await (0,i.Z)({url:`/v3/boards/${e}/follow/`,method:"DELETE"}),n({event_type:27,object_id_str:e})}catch(n){a((0,l.md)(e,!0))}}}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/81077-7ece706b0d69eea2.mjs.map
<?php 

echo<<<EOT

    data-xdata='
EOT;

echo $stringify(chart["xdata"]);


echo<<<EOT
' data-ydata='
EOT;

echo $stringify(chart["ydata"]);


echo<<<EOT
' 


    
EOT;
if($v["auditStatus"]["name"] == "online" || $v["auditStatus"]["name"] == "offline" && $v == $false){

echo<<<EOT


                    
EOT;
} elseif ($v["auditStatus"]["name"] == "auditing" || $v["auditStatus"]["name"] == "refused"){

echo<<<EOT


                    
EOT;
}

echo<<<EOT
 
    
EOT;
foreach($list as $i => $item){

echo<<<EOT

    
EOT;
foreach($item as $j => $obj){

echo<<<EOT

       <div id="
EOT;

echo $i;

echo $j;


echo<<<EOT
"> </div>
    
EOT;
}

echo<<<EOT


EOT;
}

echo<<<EOT

    
    <option data-chartCfg = '{ "bars":{ "css":{"background-color" : 
EOT;
if($index/2 == 0){

echo<<<EOT
 "#B41800" 
EOT;
} else {

echo<<<EOT
 "#F8941C" 
EOT;
}

echo<<<EOT
 }' 
EOT;
if($model["state"] == "auditing"){

echo<<<EOT
 selected
EOT;
}

echo<<<EOT
 value ="auditing">待审核</option>

EOT;
if( ! $success){

echo<<<EOT
foo
EOT;
}

echo<<<EOT


    
EOT;

echo $stringify(obj);


echo<<<EOT


    
EOT;

echo $url();


echo<<<EOT


    
EOT;
if($v["auditStatus"]["name"] == "online" || $v["auditStatus"]["name"] == "offline"){

echo<<<EOT

    
EOT;
}

echo<<<EOT



    
EOT;
if($list == 1){

echo<<<EOT

    ceshi1
    
EOT;
} elseif ($list == 2){

echo<<<EOT

    ceshi2
    
EOT;
} else {

echo<<<EOT

    ceshiif
    
EOT;
}

echo<<<EOT

    
    

EOT;
foreach($list as $item){

echo<<<EOT

我是测试
EOT;

echo $item;


echo<<<EOT


EOT;
}

echo<<<EOT



EOT;
foreach($list["shuxing"] as $item){

echo<<<EOT

我是测试
EOT;

echo $item;


echo<<<EOT


EOT;
}

echo<<<EOT


EOT;
foreach($list["shuxing"]["shuxinger"] as $item){

echo<<<EOT

我是测试
EOT;

echo $item;


echo<<<EOT


EOT;
}

echo<<<EOT


<!--#def {
    "success": true, 
    "model": {
        "startTime": "2013-9-22",
        "endTime" :"2013-10-22",
        "name": "推广名称",
        "auditStatus":"auditing",
        "page": "2",
        "totalPage" : "2",
        "promotions":[{
                "name":"营销活动",
                "id":1,
                "bizId":3605140088, 
                "gmtModified":"2013-10-10", 
                "gmtCreate":"2013-10-10", 
                    "auditStatus":{"name":"auditing","value":"待审核"}, 
                            "marketingType":"tmall", 
                "gmtStart":"2013-10-10", 
                "gmtEnd":"2013-10-10", 
                "relatedUrl":"http://",
                             "activityType":"give",
                             
                "marketingAmount":200,
                            "reason":"审核不通过原因"},{
                "name":"营销活动",
                "id":1,
                "bizId":3605140088, 
                "gmtModified":"2013-10-10", 
                "gmtCreate":"2013-10-10", 
                    "auditStatus":{"name":"refused","value":"审核不通过"}, 
                            "marketingType":"tmall", 
                "gmtStart":"2013-10-10", 
                "gmtEnd":"2013-10-10", 
                "relatedUrl":"http://",
                             "activityType":"give",
                             
                "marketingAmount":200,
                            "reason":"审核不通过原因"},{
                "name":"营销活动",
                "id":1,
                "bizId":3605140088, 
                "gmtModified":"2013-10-10", 
                "gmtCreate":"2013-10-10", 
                    "auditStatus":{"name":"offline","value":"已推广"}, 
                            "marketingType":"tmall", 
                "gmtStart":"2013-10-10", 
                "gmtEnd":"2013-10-10", 
                "relatedUrl":"http://",
                             "activityType":"give",
                             
                "marketingAmount":200,
                            "reason":"审核不通过原因"}]
        
        }
} -->

<link rel="stylesheet" href="http://g.tbcdn.cn/tm/tbs-ui/1.0.5/css/??mui.css,tbsui.css" />
<link rel="stylesheet" href="promotionQueryMain.css" />
<link rel="stylesheet" href="/mods/content/common.css" />
<script src="http://a.tbcdn.cn/s/kissy/1.3.0/kissy.js"></script>
<script src="http://g.tbcdn.cn/mui/seed/1.1.7/seed.js"></script> 

<input type="hidden" name="csrf_token" value="111" />
<div class="control-section" data-chartCfg = '{ "bars":{ "css":{"background-color" : 
EOT;
if($index/2 == 0){

echo<<<EOT
 "#B41800" 
EOT;
} else {

echo<<<EOT
 "#F8941C" 
EOT;
}

echo<<<EOT
 }'>
    <form id="postForm" method="get" action="#">
    <ul class="ul-query">
        <li>
            <span class="li-description">创建时间：</span>
            <input type="text" class="calendarNeeded ks-select-calendar" name="startTime" value="
EOT;

echo $model["startTime"];


echo<<<EOT
"/>
            <span class="rangeToText">至</span>
            <input type="text" class="calendarNeeded ks-select-calendar" name="endTime" value="
EOT;

echo $model["endTime"];


echo<<<EOT
"/>
            <span class="timeSelector" timeRange="0">今天</span>
            <span class="timeSelector" timeRange="7">最近7天</span>
            <span class="timeSelector" timeRange="30">最近1个月</span>
            <span class="timeSelector" timeRange="90">3个月</span>
            <span class="timeSelector" timeRange="365">1年</span>
        </li>

        <li>
            <span class="li-description">推广名称：</span>
            <input class="adName" type="text"  name="name" value="
EOT;

echo $model["name"];


echo<<<EOT
" />
            <a id="queryBtn" href="javascript:void(0)" class="ui-btn-m queryBtn">查询</a>
            
        </li>
    </ul>
    <input type="hidden" name="state" value="
EOT;

echo $model["state"];


echo<<<EOT
" />
    <input type="hidden" name="page" value="
EOT;

echo $model["page"];


echo<<<EOT
" />
    </form>
</div>

<div class="ui-table adCreate-table">
    <span><i class="icon">Y</i><a href="/choose_group.html">创建营销推广</a>
    <span class="gray-tip">会员群组基于已生成的会员报表</span>
    <table class="main-table">
        <thead>
            <tr>
                <th class="col1">创建时间</th>
                <th class="col2">推广名称｜推广时段</th>
                <th class="col3">推广数量</th>
                <th class="col4">
                    <select id="stateSelector" name="state">
                        <option 
EOT;
if($model["state"] == ""){

echo<<<EOT
 selected
EOT;
}

echo<<<EOT
 value ="">全部</option>
                        <option 
EOT;
if($model["state"] == "auditing"){

echo<<<EOT
 selected
EOT;
}

echo<<<EOT
 value ="auditing">待审核</option>
                        <option 
EOT;
if($model["state"] == "passed"){

echo<<<EOT
 selected
EOT;
}

echo<<<EOT
 value ="passed">审核通过</option>
                        <option 
EOT;
if($model["state"] == "refused"){

echo<<<EOT
 selected
EOT;
}

echo<<<EOT
 value ="refused">审核不通过</option>
                        <option 
EOT;
if($model["state"] == "online"){

echo<<<EOT
 selected
EOT;
}

echo<<<EOT
 value ="online">推广中</option>
                        <option 
EOT;
if($model["state"] == "offline"){

echo<<<EOT
 selected
EOT;
}

echo<<<EOT
 value ="offline">推广结束</option>
                    </select>
                </th>
                <th class="col5">操作</th>
            </tr>
        </thead>

        
EOT;
foreach($model["promotions"] as $k => $v){

echo<<<EOT

            <tr class="detailRow">
                <td>
                    
EOT;

echo $v["gmtCreate"];


echo<<<EOT

                </td>
                <td>
                    <span class="mouseInteractionEnabed"><a href="javascript:void(0)">
EOT;

echo $v["name"];


echo<<<EOT
</a></span><br>
                    
EOT;

echo $v["gmtStart"];


echo<<<EOT
 - 
EOT;

echo $v["gmtEnd"];


echo<<<EOT


                </td>
                <td>
EOT;

echo $v["marketingAmount"];


echo<<<EOT
</td>
                <td>
                    
EOT;
if($v["auditStatus"]["name"] == "refused"){

echo<<<EOT

                        审核不通过<br>
                        
EOT;

echo $v["reason"];


echo<<<EOT

                    
EOT;
} else {

echo<<<EOT

                        
EOT;

echo $v["auditStatus"]value"];


echo<<<EOT

                    
EOT;
}

echo<<<EOT

                </td>
                <td>
                    
EOT;
if($v["auditStatus"]["name"] == "online" || $v["auditStatus"]["name"] == "offline"){

echo<<<EOT

                        <span class="mouseInteractionEnabed">查看效果</span>
                    
EOT;
} elseif ($v["auditStatus"]["name"] == "auditing" || $v["auditStatus"]["name"] == "refused"){

echo<<<EOT

                        <span class="mouseInteractionEnabed"><a href="javascript:void(0)">编辑</a></span>  
                        <span class="J_deleteBtn mouseInteractionEnabed">删除</span>
                        <form class="J_deleteForm" method="post" action="/delete">
                            <input type="hidden" name="csrf_tmp" value="hey">
                            <input type="hidden" name="id" value="
EOT;

echo $v["id"];


echo<<<EOT
">
                            <input type="hidden" name="action" value="marketing_action" />
                            <input type="hidden" name="event_submit_do_delete" value="any" />
                        </form>
                    
EOT;
}

echo<<<EOT


                </td>

              <!--   
              审核中，审核不通过：编辑 删除
              审核通过：无操作
              推广中，推广结束：查看效果 
              -->

            </tr>
           
        
EOT;
}

echo<<<EOT


    </table>

    <div id="J_Page" currentPage="
EOT;

echo $model["page"];


echo<<<EOT
" pageCount="
EOT;

echo $model["totalPage"];


echo<<<EOT
"></div>
</div>

<script type="text/javascript">
    KISSY.use(['base','event','mui/select','mui/pagination','node','dom','calendar','json','ajax','sizzle','calendar/assets/dpl.css'].join(","),function(S,Base,E,Select, Pagination,Node,Dom,Calendar,JSON,IO){
        initPageQuery();
        initMouseAct();

        function initPageQuery(){
            initCalendar(Node.one(".ul-query"));
            initTimeSelector();
            var pageContainer  = Node.one("#J_Page");

            var totalPageCount = parseInt(pageContainer.attr("pageCount")) || 1;
            var currentPage    = parseInt(pageContainer.attr("currentPage")) || 1;
            var pagination = new Pagination({
                container   : '#J_Page',
                totalPage   : totalPageCount,
                currentPage : currentPage
            });

            pagination.on('afterPageChange', function(e){
                Node.one("#postForm").one("input[name='page']").val(e.idx);
                startQuery();
            });

            Node.one("#queryBtn").on("click",function(e){
                startQuery();
            });

            Node.all(".J_deleteBtn").on("click",function(e){
                Node(this).parent().one(".J_deleteForm")[0].submit();
            });

            Node.one("#stateSelector").on("change",function(){
                var selectValue = this.value;
                Node.one("#postForm").one("input[name='state']").val(selectValue);
                startQuery();
            });

            var inputStart = Node.one("input[name='startTime']");
            var inputEnd   = Node.one("input[name='endTime']");

            function startQuery(){
                if(inputValidation()){
                    S.get("#postForm").submit();
                }else{
                    return;
                }                
            }

            function inputValidation(){
                var startDate = strToDate(inputStart.val());
                var endDate   = strToDate(inputEnd.val());
                Node.one(".err-time") && Node.one(".err-time").remove();

                if(!startDate || !endDate){
                    return true;
                }else if(startDate && endDate && startDate <= endDate){
                    return true;
                }else{
                    var tipTpl = '<div class="err-time"><div class="mui-msg">'+
                    '    <div class="mui-msg-con mui-msg-error">'+
                    '        时间范围有误'+
                    '        <s class="mui-msg-icon"></s>'+
                    '    </div>'+
                    '</div></div>';                        

                    Node.one(".ul-query li").append(tipTpl);

                    return false;
                }
            }

            function initTimeSelector(){
                E.delegate( S.get(".ul-query") , "click",".timeSelector",function(e){
                    var today  = new Date();
                    inputEnd.val( S.Date.format(today,'yyyy-mm-dd'));

                    var timeRange = Node(e.srcElement).attr("timeRange");
                    var startDate = new Date();
                    if(timeRange <= 7){
                        startDate.setDate( today.getDate() - timeRange );
                    }else if(timeRange == 30){
                        startDate.setMonth( today.getMonth() - 1 );
                    }else if(timeRange == 90){
                        startDate.setMonth( today.getMonth() - 3 );
                    }else if(timeRange == 365){
                        startDate.setYear( today.getFullYear() - 1 );
                    }

                    inputStart.val(S.Date.format(startDate, 'yyyy-mm-dd')); //TODO : format
                });

                function generateStr(date){
                    return date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
                }
            }
          
        }

        function initCalendar(NodeRange){
            if(!NodeRange) return;
            S.each(NodeRange.all(".calendarNeeded"),function(ele){
                var S_Date    = S.Date;
                
                new Calendar(ele, {
                    popup       : true,
                    triggerType : ['click'],
                    closable    : true,
                    maxDate     : new Date()
                }).on('select', function(e) {
                    Node(ele).val(S_Date.format(e.date, 'yyyy-mm-dd'));
                });
            });

        };

        function initMouseAct(){
            S.each( Node.all(".detailRow") ,function(ele,index){
                Node(ele).on("mouseenter",function(){
                    Node(this).all(".mouseInteractionEnabed").addClass("mouseIn");
                });

                Node(ele).on("mouseleave",function(){
                    Node(this).all(".mouseInteractionEnabed").removeClass("mouseIn");
                });
            });
        }

        function strToDate(str){  //compatible with IE8
            var initSrc = str.split(" ");
            var result;

            try{
                if(initSrc.length > 1){  //YYYY-MM-DD HH:MM
                    var date = initSrc[0].split("-");
                    var time = initSrc[1].split(":");
                    result = new Date(date[0] , date[1]-1 ,date[2] ,time[0],time[1] )
                }else{
                    var date = str.split("-");
                    result = new Date(date[0] , date[1]-1 ,date[2] ); 
                }
            }catch(e){
                return false;
            }

            return isNaN(result) ? false:result;
        }


    });

</script>




EOT;

?>
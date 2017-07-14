## VPS库存监控 ##

定时对所需要的VPS提供商所提供的VPS产品进行监控，更新指定VPS产品是否有货。

## 安装 ##

还原DB目录下的数据问题，修改mylsql.php文件下的数据库配置。

## 自动更新 ##
linux设置定时任务，将 http://youhostname/function.php 加入计划中即可（建议5分钟执行一次）。

目前加入了xvmlabs的监控，其他家的没看，因为个人现在在等待xvmlabs的小鸡。

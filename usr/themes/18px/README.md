[toc]

# 18px-Typecho-Theme

![screenshot](https://shaun.oss-cn-beijing.aliyuncs.com/typora/202007/27/221114-560343.png/watermark)

# 0x01 主题介绍
| key | value |
| --- | --- |
| 名称 | 18px       |
| 风格 | 圆角、简洁 |
| 设计思路 | 使用圆角和阴影作为主要的设计元素，对官方默认主题的布局进行了简单调整 |
| 功能 | 功能上借鉴了一些开源项目，如[MWordStar](https://github.com/changbin1997/MWordStar)，图标用到[Iconfont](https://www.iconfont.cn/)的一个开源图标的SVG，背景使用 *代码雨* 风格，使用canvas绘制而成 |
| 作者 | [小扬Shaun](https://shaunyoung.cn) |
| 主题演示站 | [传送门](https://18px.shaunyoung.cn) |

# 0x02 使用方法

1. 下载realease版本（[传送门]()）。
2. 在本地解压，并将文件夹命名为 **18px** 。（请严格按照规范命名，主题中有一处使用到包含主题文件夹名称的路径，命名不规范可能导致静态资源加载失败）
3. 将整个文件夹上传到网站根目录下的 `/usr/themes/` 目录。
4. 在后台 **外观** 中切换到 *18px* 主题。
5. 设置主题外观。

# 0x03 亮点

## 3.1 SEO优化

在 `head` 标签中加入了多个 `meta` 标签，动态写入网站描述和关键词，方便搜索引擎爬虫对网站进行收录。

## 3.2 canvas背景

您可选择使用canvas绘制的动态背景，v1.0.0版本目前仅有“代码雨”特效可选，后续会加入更多特效。

## 3.3 布局

采用响应式布局，兼容PC、平板、手机等尺寸，让您的博客拥有良好的阅读体验。

对于宽屏采用三栏布局，中等屏幕两栏布局，较窄屏幕一栏布局。

## 3.4 CSS效果

- 对于大部分圆形头像，鼠标悬浮头像会有旋转动效。
- 对于窄屏下的折叠菜单，同样有丝滑的展示效果。
- 侧边栏鼠标悬浮会有动效。

![image-20200728001511583](https://shaun.oss-cn-beijing.aliyuncs.com/typora/202007/28/001514-735596.png/watermark)

## 3.5 圆角风格

圆角设计是一种趋势，越来越多的设计正在采用圆角以及无框线设计。这样的设计理念都融入在 **18px** 中。

# 0x04 反馈

欢迎各位前辈指正，欢迎各位使用者反馈bug！

可以提issue或前往[我的博客](https://shaunyoung.cn/)进行留言！
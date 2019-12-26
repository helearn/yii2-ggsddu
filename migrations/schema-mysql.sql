-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-12-26 08:52:50
-- 服务器版本： 5.7.28-log
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiimath`
--

-- --------------------------------------------------------

--
-- 表的结构 `hl_knowledge`
--

CREATE TABLE `hl_knowledge` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL COMMENT '标题',
  `name` varchar(32) NOT NULL COMMENT '名称',
  `pid` int(11) NOT NULL COMMENT '父级id',
  `level` int(11) NOT NULL COMMENT '级别',
  `is_menu` tinyint(1) NOT NULL COMMENT '是否菜单',
  `sort` int(11) NOT NULL COMMENT '排序',
  `status` int(11) NOT NULL COMMENT '状态（-1删除；0禁用；1启用）',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '修改时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `hl_question_choice`
--

CREATE TABLE `hl_question_choice` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT '名称（留空自动生成）',
  `question_stem` int(11) NOT NULL COMMENT '题干',
  `option1` int(11) NOT NULL COMMENT '选项1',
  `option2` int(11) NOT NULL COMMENT '选项2',
  `option3` int(11) NOT NULL COMMENT '选项3',
  `option4` int(11) NOT NULL COMMENT '选项4',
  `options` int(11) NOT NULL COMMENT '其他选项【以|#|分割每个选项】',
  `correct_options` int(11) NOT NULL COMMENT '正确选项',
  `knowledge_ids` int(11) NOT NULL COMMENT '相关知识点',
  `answer_process` int(11) NOT NULL COMMENT '解答说明',
  `is_multiple` int(11) NOT NULL COMMENT '是否多选题',
  `status` int(11) NOT NULL COMMENT '状态【-1删除；0禁用；1启用】',
  `created_id` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  `oid` int(11) NOT NULL COMMENT '原题编号',
  `uid` int(11) NOT NULL COMMENT '创建者编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='选择题';

-- --------------------------------------------------------

--
-- 表的结构 `hl_question_cloze`
--

CREATE TABLE `hl_question_cloze` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT '名称【留空自动生成】',
  `question_stem` int(11) NOT NULL COMMENT '题干',
  `correct_answer` int(11) NOT NULL COMMENT '正确答案【以|#|分割每个填空】',
  `answer_process` int(11) NOT NULL COMMENT '解答说明',
  `knowledge_ids` int(11) NOT NULL COMMENT '相关知识点',
  `status` int(11) NOT NULL COMMENT '状态【-1删除；0禁用；1启用】',
  `created_id` int(11) NOT NULL COMMENT '创建时间',
  `updated_id` int(11) NOT NULL COMMENT '修改时间',
  `oid` int(11) NOT NULL COMMENT '原题编号',
  `uid` int(11) NOT NULL COMMENT '创建者编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='英语完形填空题';

-- --------------------------------------------------------

--
-- 表的结构 `hl_question_completion`
--

CREATE TABLE `hl_question_completion` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT '名称【留空自动生成】',
  `question_stem` int(11) NOT NULL COMMENT '题干',
  `correct_answer` int(11) NOT NULL COMMENT '正确答案',
  `answer_process` int(11) NOT NULL COMMENT '解答说明',
  `knowledge_ids` int(11) NOT NULL COMMENT '相关知识点',
  `status` int(11) NOT NULL COMMENT '状态【-1删除；0禁用；1启用】',
  `created_id` int(11) NOT NULL COMMENT '创建时间',
  `updated_id` int(11) NOT NULL COMMENT '修改时间',
  `oid` int(11) NOT NULL COMMENT '原题编号',
  `uid` int(11) NOT NULL COMMENT '创建者编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='填空题';

-- --------------------------------------------------------

--
-- 表的结构 `hl_question_essay`
--

CREATE TABLE `hl_question_essay` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT '名称【留空自动生成】',
  `question_stem` int(11) NOT NULL COMMENT '题干',
  `correct_answer` int(11) NOT NULL COMMENT '参考答案',
  `answer_process` int(11) NOT NULL COMMENT '解答说明',
  `knowledge_ids` int(11) NOT NULL COMMENT '相关知识点',
  `status` int(11) NOT NULL COMMENT '状态【-1删除；0禁用；1启用】',
  `created_id` int(11) NOT NULL COMMENT '创建时间',
  `updated_id` int(11) NOT NULL COMMENT '修改时间',
  `oid` int(11) NOT NULL COMMENT '原题编号',
  `uid` int(11) NOT NULL COMMENT '创建者编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='数学解答题，作文';

-- --------------------------------------------------------

--
-- 表的结构 `hl_question_read_detailed`
--

CREATE TABLE `hl_question_read_detailed` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL COMMENT '父级id',
  `question_stem` text NOT NULL COMMENT '题干',
  `correct_answer` text NOT NULL COMMENT '参考答案',
  `answer_process` text NOT NULL COMMENT '解答说明',
  `knowledge_ids` int(11) NOT NULL COMMENT '知识点',
  `status` int(11) NOT NULL COMMENT '状态【-1删除；0禁用；1启用】'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `hl_question_read_stem`
--

CREATE TABLE `hl_question_read_stem` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT '名称【留空自动生成】',
  `title` varchar(512) NOT NULL COMMENT '标题',
  `question_stem` int(11) NOT NULL COMMENT '题干',
  `status` int(11) NOT NULL COMMENT '状态【-1删除；0禁用；1启用】',
  `created_id` int(11) NOT NULL COMMENT '创建时间',
  `updated_id` int(11) NOT NULL COMMENT '修改时间',
  `oid` int(11) NOT NULL COMMENT '原题编号',
  `uid` int(11) NOT NULL COMMENT '创建者编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='语文阅读理解题';

-- --------------------------------------------------------

--
-- 表的结构 `hl_test_pager`
--

CREATE TABLE `hl_test_pager` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL COMMENT '名称【留空自动生成】',
  `title` int(11) NOT NULL COMMENT '试卷标题',
  `explanation` int(11) NOT NULL COMMENT '试卷说明',
  `status` int(11) NOT NULL COMMENT '状态【-1删除；0禁用；1启用】',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `start_at` int(11) NOT NULL COMMENT '测试开始时间',
  `end_at` int(11) NOT NULL COMMENT '测试结束时间',
  `oid` int(11) NOT NULL COMMENT '原卷编号',
  `uid` int(11) NOT NULL COMMENT '创建者编号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `hl_test_pager_question_type`
--

CREATE TABLE `hl_test_pager_question_type` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL COMMENT '试卷编号',
  `type` int(11) NOT NULL COMMENT '题型【choice;completion;cloze;read;essay】',
  `title` int(11) NOT NULL COMMENT '题型标题',
  `sort` int(11) NOT NULL COMMENT '卷中排序',
  `default_score` int(11) NOT NULL COMMENT '默认每题分值'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hl_knowledge`
--
ALTER TABLE `hl_knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_question_choice`
--
ALTER TABLE `hl_question_choice`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `hl_question_cloze`
--
ALTER TABLE `hl_question_cloze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_question_completion`
--
ALTER TABLE `hl_question_completion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_question_essay`
--
ALTER TABLE `hl_question_essay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_question_read_detailed`
--
ALTER TABLE `hl_question_read_detailed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_question_read_stem`
--
ALTER TABLE `hl_question_read_stem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_test_pager`
--
ALTER TABLE `hl_test_pager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hl_test_pager_question_type`
--
ALTER TABLE `hl_test_pager_question_type`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `hl_knowledge`
--
ALTER TABLE `hl_knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

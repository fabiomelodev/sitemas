-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04/01/2026 às 02:17
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitemas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `customers`
--

INSERT INTO `customers` (`id`, `company`, `website`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'ADC', 'ADC', 'adc@gmail.com', '1199999-9999', '2025-09-05 22:13:21', '2025-09-05 22:13:21'),
(2, 'ADC', 'ADC', 'adc@gmail.com', '1199999-9999', '2025-09-05 22:43:31', '2025-09-05 22:43:31');

-- --------------------------------------------------------

--
-- Estrutura para tabela `domains`
--

CREATE TABLE `domains` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `domains`
--

INSERT INTO `domains` (`id`, `name`, `full_domain`, `company`, `website`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, NULL, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(2, 'seusite1', 'seusite1.sitemas.com.br', NULL, NULL, '1', '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(3, 'seusite2', 'seusite2.sitemas.com.br', NULL, NULL, NULL, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(4, 'seusite3', 'seusite3.sitemas.com.br', NULL, NULL, NULL, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(5, 'seusi', 'seusi.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:47:34', '2025-08-29 04:47:34'),
(6, 'seusite6', 'seusite6.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:47:36', '2025-08-29 04:47:36'),
(7, 'seusite7', 'seusite7.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:48:08', '2025-08-29 04:48:08'),
(8, 'seusite6', 'seusite6.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:51:26', '2025-08-29 04:51:26'),
(9, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:52:59', '2025-08-29 04:52:59'),
(10, 'seusite4', 'seusite4.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:52:59', '2025-08-29 04:52:59'),
(11, 'seusite3', 'seusite3.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:53:00', '2025-08-29 04:53:00'),
(12, 'seusite2', 'seusite2.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:53:01', '2025-08-29 04:53:01'),
(13, 'seusite1', 'seusite1.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:53:01', '2025-08-29 04:53:01'),
(14, 'seusite5', 'seusite5.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:58:01', '2025-08-29 04:58:01'),
(15, 'seusite8', 'seusite8.sitemas.com.br', NULL, NULL, '2', '2025-08-29 04:59:37', '2025-08-29 04:59:37'),
(16, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:13', '2025-08-29 05:02:13'),
(17, 'seusite7', 'seusite7.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:13', '2025-08-29 05:02:13'),
(18, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:14', '2025-08-29 05:02:14'),
(19, 'seusite6', 'seusite6.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:14', '2025-08-29 05:02:14'),
(20, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:15', '2025-08-29 05:02:15'),
(21, 'seusite5', 'seusite5.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:15', '2025-08-29 05:02:15'),
(22, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:16', '2025-08-29 05:02:16'),
(23, 'seusite4', 'seusite4.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:16', '2025-08-29 05:02:16'),
(24, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:16', '2025-08-29 05:02:16'),
(25, 'seusite2', 'seusite2.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:17', '2025-08-29 05:02:17'),
(26, 'seusite3', 'seusite3.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:18', '2025-08-29 05:02:18'),
(27, 'seusite4', 'seusite4.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:18', '2025-08-29 05:02:18'),
(28, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:18', '2025-08-29 05:02:18'),
(29, 'seusite5', 'seusite5.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:02:19', '2025-08-29 05:02:19'),
(30, 'seusite1', 'seusite1.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:05:06', '2025-08-29 05:05:06'),
(31, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:05:08', '2025-08-29 05:05:08'),
(32, 'seusite1', 'seusite1.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:05:09', '2025-08-29 05:05:09'),
(33, 'seusite2', 'seusite2.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:05:10', '2025-08-29 05:05:10'),
(34, 'seusite', 'seusite.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:05:10', '2025-08-29 05:05:10'),
(35, 'seusite3', 'seusite3.sitemas.com.br', NULL, NULL, '2', '2025-08-29 05:05:11', '2025-08-29 05:05:11'),
(36, 'adc', 'adc.sitemas.com.br', NULL, NULL, '3', '2025-09-05 22:12:24', '2025-09-05 22:12:24'),
(37, 'adc', 'adc.sitemas.com.br', NULL, NULL, '3', '2025-09-05 22:12:37', '2025-09-05 22:12:37'),
(38, 'adc', 'adc.sitemas.com.br', NULL, NULL, '3', '2025-09-05 22:12:46', '2025-09-05 22:12:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Como posso alterar imagens e textos?', 'Acessando o painel de controle do seu site meumodelo.sitemas.com.br/admin poderá alterar alterar imagens, textos e links sem complexidade.', '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(2, 'Como funciona os planos?', 'Importante: Os planos Essencial e Avançado funcionam por assinatura mensal, ou seja, o site permanece ativo enquanto a assinatura estiver vigente. <br /> Se preferir adquirir o modelo de forma definitiva, oferecemos essa opção mediante orçamento, com instalação realizada em sua própria hospedagem.', '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(3, 'E se eu quiser cancelar?', 'Iremos manter os seus dados e modelo com seu conteúdo por dois meses  após o cancelamento. Podendo retomar o site entre os dois meses com todos os dados.', '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(4, 'Preciso pagar alguma taxa de instalação?', 'Não. Assinando um dos planos, não há taxa de instalação. O site é configurado e entregue sem custo adicional.', '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(5, 'Consigo usar meu domínio próprio?', 'Sim, é possível usar o domínio da sua igreja (ex: www.suaigreja.com.br). Para configurar corretamente, consulte o suporte.', '2025-08-28 15:43:52', '2025-08-28 15:43:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `features`
--

CREATE TABLE `features` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `features`
--

INSERT INTO `features` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Landing Page', '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(2, 'Institucional', '2025-08-28 15:43:52', '2025-08-28 15:43:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_06_11_060812_create_faqs_table', 1),
(6, '2025_06_11_061619_create_templates_table', 1),
(7, '2025_06_11_062304_create_domains_table', 1),
(8, '2025_06_12_023940_create_plans_table', 1),
(9, '2025_06_12_033107_create_template_features_table', 1),
(10, '2025_06_12_033131_create_features_table', 1),
(11, '2025_06_12_145839_create_orders_table', 1),
(12, '2025_06_19_052830_create_niches_table', 1),
(13, '2025_06_20_031259_create_niche_templates_table', 1),
(14, '2025_06_20_032602_create_niche_plans_table', 1),
(15, '2025_06_22_051113_create_subscriptions_table', 1),
(16, '2025_06_24_011535_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `niches`
--

CREATE TABLE `niches` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `niches`
--

INSERT INTO `niches` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Igreja', 'igreja', '2025-08-28 15:43:52', '2025-08-28 15:43:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `niche_plans`
--

CREATE TABLE `niche_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `niche_id` bigint UNSIGNED NOT NULL,
  `plan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `niche_plans`
--

INSERT INTO `niche_plans` (`id`, `niche_id`, `plan_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `niche_templates`
--

CREATE TABLE `niche_templates` (
  `id` bigint UNSIGNED NOT NULL,
  `niche_id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `niche_templates`
--

INSERT INTO `niche_templates` (`id`, `niche_id`, `template_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `step_current` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `customer_id` bigint UNSIGNED DEFAULT NULL,
  `domain_id` bigint UNSIGNED DEFAULT NULL,
  `plan_id` bigint UNSIGNED DEFAULT NULL,
  `template_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `orders`
--

INSERT INTO `orders` (`id`, `uuid`, `step_current`, `payment_status`, `customer_id`, `domain_id`, `plan_id`, `template_id`, `created_at`, `updated_at`) VALUES
(1, '681526c9-9fb9-483d-9012-d1d6a6443181', NULL, 'pending', NULL, 33, NULL, NULL, '2025-08-28 15:44:03', '2025-08-28 15:44:03'),
(2, 'f361d053-aa16-4558-9014-be25327eefeb', '2', 'pending', NULL, 35, 1, 2, '2025-08-29 04:47:27', '2025-08-29 05:11:19'),
(3, 'c36c0013-aa81-4b26-8287-87bc33693493', '2', 'pending', 2, 38, 1, 1, '2025-09-05 22:09:00', '2025-09-05 22:43:31');

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `plans`
--

CREATE TABLE `plans` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emphasis` tinyint(1) DEFAULT NULL,
  `items` json DEFAULT NULL,
  `feature_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `plans`
--

INSERT INTO `plans` (`id`, `title`, `slug`, `value`, `emphasis`, `items`, `feature_id`, `created_at`, `updated_at`) VALUES
(1, 'Básico', 'basico', '39', 0, '[{\"title\": \"📄 1x Modelo landing page\", \"description\": \"\"}, {\"title\": \"⚙️ Painel de controle\", \"description\": \"\"}, {\"title\": \"📧 Suporte via Whatsapp\", \"description\": \"\"}, {\"title\": \"🔗 1x Subdomínio disponível\", \"description\": \"\"}, {\"title\": \"📧 1x E-mail\", \"description\": \"seusite@sitemas.com.br\"}]', 1, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(2, 'Essencial', 'essencial', '59', 1, '[{\"title\": \"📄 1x Modelo institucional\", \"description\": \"(5 páginas)\"}, {\"title\": \"⚙️ Painel de controle\", \"description\": \"\"}, {\"title\": \"📧 Suporte via Whatsapp\", \"description\": \"\"}, {\"title\": \"🔗 1x Subdomínio disponível\", \"description\": \"\"}, {\"title\": \"📧 2x E-mail\", \"description\": \"seusite@sitemas.com.br\"}]', 1, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(3, 'Avançado', 'avancado', '79', 0, '[{\"title\": \"📄 2x Modelos\", \"description\": \"(landing page | institucional)\"}, {\"title\": \"⚙️ Painel de controle\", \"description\": \"\"}, {\"title\": \"📧 Suporte via Whatsapp\", \"description\": \"\"}, {\"title\": \"🔗 1x Subdomínio disponível\", \"description\": \"\"}, {\"title\": \"📧 4x E-mail\", \"description\": \"seusite@sitemas.com.br\"}]', 2, '2025-08-28 15:43:52', '2025-08-28 15:43:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp_subscription_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `templates`
--

CREATE TABLE `templates` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `templates`
--

INSERT INTO `templates` (`id`, `title`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Modelo 01', 'modelo-01', NULL, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(2, 'Modelo 02', 'modelo-02', NULL, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(3, 'Modelo 03', 'modelo-03', NULL, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(4, 'Modelo 04', 'modelo-04', NULL, '2025-08-28 15:43:52', '2025-08-28 15:43:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `template_features`
--

CREATE TABLE `template_features` (
  `id` bigint UNSIGNED NOT NULL,
  `feature_id` bigint UNSIGNED NOT NULL,
  `template_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `template_features`
--

INSERT INTO `template_features` (`id`, `feature_id`, `template_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(2, 1, 2, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(3, 2, 2, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(4, 1, 3, '2025-08-28 15:43:52', '2025-08-28 15:43:52'),
(5, 2, 4, '2025-08-28 15:43:52', '2025-08-28 15:43:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fabio Melo', 'fabiomelodev@gmail.com', NULL, '$2y$12$QkAMcrAV/z10hpLVUMAA5OiyeB8wsoarhfjXZQc476vK5lp5YO/8a', NULL, NULL, '2025-09-05 23:00:55');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `niches`
--
ALTER TABLE `niches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `niche_plans`
--
ALTER TABLE `niche_plans`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `niche_templates`
--
ALTER TABLE `niche_templates`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `template_features`
--
ALTER TABLE `template_features`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `niches`
--
ALTER TABLE `niches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `niche_plans`
--
ALTER TABLE `niche_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `niche_templates`
--
ALTER TABLE `niche_templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `template_features`
--
ALTER TABLE `template_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

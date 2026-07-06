<?php

declare(strict_types=1);

return [
    ['slug' => 'w3-intro', 'order' => 1, 'title' => 'Web3 y blockchain intro', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'Conceptos, no hype — educativo.', 'concepts' => ['blockchain', 'web3', 'decentralized'], 'sections' => [
        ['heading' => 'Blockchain', 'body' => 'Ledger **distribuido** inmutable — Bitcoin pagos, Ethereum **smart contracts** programables.'],
        ['heading' => 'Web3', 'body' => 'Apps descentralizadas (dApps) — wallet firma transacciones — **entender riesgos**: scams, irreversibilidad, regulación.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Smart contract?', 'options' => ['Código on-chain auto-ejecutado', 'Legal PDF', 'CSS file'], 'answer' => 'Código on-chain auto-ejecutado', 'explanation' => 'Immutable post-deploy — bugs costosos.', 'pro_tip' => 'Never invest from course — education only.'],
        ['type' => 'choice', 'question' => '¿Tx irreversible significa...?', 'options' => ['No chargeback — error = pérdida', 'Bank reverses', 'Undo button'], 'answer' => 'No chargeback — error = pérdida', 'explanation' => 'Security critical.', 'pro_tip' => 'Curso ethical hacking audit mindset.'],
    ]],
    ['slug' => 'w3-eth', 'order' => 2, 'title' => 'Ethereum y EVM', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'Accounts, gas y networks.', 'concepts' => ['ethereum', 'evm', 'gas'], 'sections' => [
        ['heading' => 'Ethereum', 'body' => 'EOA wallets + contract accounts — gas paga compute — gwei price fluctuates.'],
        ['heading' => 'Networks', 'body' => 'Mainnet real money; Sepolia/Goerli testnets free ETH faucets — **never mainnet until audited**.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Gas limit?', 'options' => ['Max compute units tx willing pay', 'Car fuel', 'Bandwidth'], 'answer' => 'Max compute units tx willing pay', 'explanation' => 'Out of gas = fail but fee lost.', 'pro_tip' => 'Estimate gas before send.'],
        ['type' => 'choice', 'question' => '¿Testnet para qué?', 'options' => ['Dev sin dinero real', 'Faster mainnet', 'Mining only'], 'answer' => 'Dev sin dinero real', 'explanation' => 'Sepolia recommended 2024+.', 'pro_tip' => 'Never share seed phrase EVER.'],
    ]],
    ['slug' => 'w3-solidity', 'order' => 3, 'title' => 'Solidity básico', 'level' => 'Intermedio', 'minutes' => 40, 'summary' => 'Contracts, storage y vulnerabilities.', 'concepts' => ['solidity', 'contract', 'vulnerability'], 'sections' => [
        ['heading' => 'Solidity', 'body' => 'contract Token { mapping(address => uint) balances; function transfer(...) public { } }'],
        ['heading' => 'Vulnerabilities', 'body' => 'Reentrancy, overflow (pre-0.8), access control — curso seguridad mindset.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Reentrancy attack?', 'options' => ['Callback recursivo drena funds', 'SQL injection', 'XSS'], 'answer' => 'Callback recursivo drena funds', 'explanation' => 'Checks-effects-interactions pattern.', 'pro_tip' => 'OpenZeppelin ReentrancyGuard.'],
        ['type' => 'contains', 'question' => 'Escribe pragma solidity', 'must_contain' => ['pragma', 'solidity'], 'hint' => 'pragma solidity ^0.8.0;', 'explanation' => 'Version compiler.', 'pro_tip' => 'Use latest 0.8+ overflow checks.'],
    ]],
    ['slug' => 'w3-web3js', 'order' => 4, 'title' => 'Web3.js / ethers.js', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'Connect wallet, read/write chain.', 'concepts' => ['ethers', 'wallet', 'provider'], 'sections' => [
        ['heading' => 'ethers.js', 'body' => 'const provider = new BrowserProvider(window.ethereum); await provider.send("eth_requestAccounts", []).'],
        ['heading' => 'Contract interaction', 'body' => 'new Contract(address, abi, signer).transfer(to, amount)'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿MetaMask provee...?', 'options' => ['Browser wallet window.ethereum', 'SQL database', 'WordPress'], 'answer' => 'Browser wallet window.ethereum', 'explanation' => 'User approves each tx.', 'pro_tip' => 'Never ask seed phrase in dApp.'],
        ['type' => 'choice', 'question' => '¿ABI?', 'options' => ['JSON interface contract methods', 'Image format', 'Gas price'], 'answer' => 'JSON interface contract methods', 'explanation' => 'Application Binary Interface.', 'pro_tip' => 'Hardhat compile generates ABI.'],
    ]],
    ['slug' => 'w3-defi', 'order' => 5, 'title' => 'DeFi concepts (teórico)', 'level' => 'Conceptos', 'minutes' => 30, 'summary' => 'DEX, liquidity, NFTs — riesgos.', 'concepts' => ['defi', 'dex', 'nft'], 'sections' => [
        ['heading' => 'DeFi', 'body' => 'Uniswap AMM — swaps sin order book — impermanent loss, rug pulls — **extreme risk**.'],
        ['heading' => 'NFTs', 'body' => 'ERC-721 unique tokens — metadata IPFS — scams abundant.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿AMM?', 'options' => ['Automated Market Maker pool liquidity', 'Bank transfer', 'Email protocol'], 'answer' => 'Automated Market Maker pool liquidity', 'explanation' => 'x*y=k formula Uniswap.', 'pro_tip' => 'Not financial advice — learn risks.'],
        ['type' => 'choice', 'question' => '¿Rug pull?', 'options' => ['Devs abandon steal liquidity', 'Legal refund', 'Gas refund'], 'answer' => 'Devs abandon steal liquidity', 'explanation' => 'DYOR — audit contracts.', 'pro_tip' => 'Curso seguridad audit skills.'],
    ]],
    ['slug' => 'w3-security', 'order' => 6, 'title' => 'Seguridad Web3', 'level' => 'Seguridad', 'minutes' => 35, 'summary' => 'Audits, phishing y best practices.', 'concepts' => ['audit', 'phishing', 'multisig'], 'sections' => [
        ['heading' => 'Security', 'body' => 'Professional audit before mainnet; multisig treasury; hardware wallet cold storage.'],
        ['heading' => 'Phishing', 'body' => 'Fake mint sites, approval scams — verify contract address Etherscan.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Seed phrase compartir?', 'options' => ['NUNCA — acceso total wallet', 'OK con soporte', 'Public GitHub'], 'answer' => 'NUNCA — acceso total wallet', 'explanation' => 'No legitimate service asks.', 'pro_tip' => 'Curso ethical hacking social engineering.'],
        ['type' => 'choice', 'question' => '¿Contract verify Etherscan?', 'options' => ['Source public audit community', 'Hides code', 'Payment only'], 'answer' => 'Source public audit community', 'explanation' => 'Transparency before interact.', 'pro_tip' => 'Slither static analysis tool.'],
    ]],
];

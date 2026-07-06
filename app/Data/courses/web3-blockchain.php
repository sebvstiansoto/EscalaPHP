<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'w3-intro',
    'order' => 1,
    'title' => 'Web3 y blockchain intro',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'Conceptos, no hype — educativo.',
    'concepts' => 
    array (
      0 => 'blockchain',
      1 => 'web3',
      2 => 'decentralized',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Blockchain',
        'body' => 'Ledger **distribuido** inmutable — Bitcoin pagos, Ethereum **smart contracts** programables.',
        'code' => 'console.log(\'Practica: w3-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Web3',
        'body' => 'Apps descentralizadas (dApps) — wallet firma transacciones — **entender riesgos**: scams, irreversibilidad, regulación.',
        'code' => 'console.log(\'Practica: w3-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Smart contract?',
        'options' => 
        array (
          0 => 'Código on-chain auto-ejecutado',
          1 => 'Legal PDF',
          2 => 'CSS file',
        ),
        'answer' => 'Código on-chain auto-ejecutado',
        'explanation' => 'Immutable post-deploy — bugs costosos.',
        'pro_tip' => 'Never invest from course — education only.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Tx irreversible significa...?',
        'options' => 
        array (
          0 => 'No chargeback — error = pérdida',
          1 => 'Bank reverses',
          2 => 'Undo button',
        ),
        'answer' => 'No chargeback — error = pérdida',
        'explanation' => 'Security critical.',
        'pro_tip' => 'Curso ethical hacking audit mindset.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'w3-eth',
    'order' => 2,
    'title' => 'Ethereum y EVM',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'Accounts, gas y networks.',
    'concepts' => 
    array (
      0 => 'ethereum',
      1 => 'evm',
      2 => 'gas',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Ethereum',
        'body' => 'EOA wallets + contract accounts — gas paga compute — gwei price fluctuates.',
        'code' => 'console.log(\'Practica: w3-eth\');',
      ),
      1 => 
      array (
        'heading' => 'Networks',
        'body' => 'Mainnet real money; Sepolia/Goerli testnets free ETH faucets — **never mainnet until audited**.',
        'code' => 'console.log(\'Practica: w3-eth\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Gas limit?',
        'options' => 
        array (
          0 => 'Max compute units tx willing pay',
          1 => 'Car fuel',
          2 => 'Bandwidth',
        ),
        'answer' => 'Max compute units tx willing pay',
        'explanation' => 'Out of gas = fail but fee lost.',
        'pro_tip' => 'Estimate gas before send.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Testnet para qué?',
        'options' => 
        array (
          0 => 'Dev sin dinero real',
          1 => 'Faster mainnet',
          2 => 'Mining only',
        ),
        'answer' => 'Dev sin dinero real',
        'explanation' => 'Sepolia recommended 2024+.',
        'pro_tip' => 'Never share seed phrase EVER.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'w3-solidity',
    'order' => 3,
    'title' => 'Solidity básico',
    'level' => 'Intermedio',
    'minutes' => 40,
    'summary' => 'Contracts, storage y vulnerabilities.',
    'concepts' => 
    array (
      0 => 'solidity',
      1 => 'contract',
      2 => 'vulnerability',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Solidity',
        'body' => 'contract Token { mapping(address => uint) balances; function transfer(...) public { } }',
        'code' => 'pragma solidity ^0.8.0;',
      ),
      1 => 
      array (
        'heading' => 'Vulnerabilities',
        'body' => 'Reentrancy, overflow (pre-0.8), access control — curso seguridad mindset.',
        'code' => 'pragma solidity ^0.8.0;',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Reentrancy attack?',
        'options' => 
        array (
          0 => 'Callback recursivo drena funds',
          1 => 'SQL injection',
          2 => 'XSS',
        ),
        'answer' => 'Callback recursivo drena funds',
        'explanation' => 'Checks-effects-interactions pattern.',
        'pro_tip' => 'OpenZeppelin ReentrancyGuard.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe pragma solidity',
        'must_contain' => 
        array (
          0 => 'pragma',
          1 => 'solidity',
        ),
        'hint' => 'pragma solidity ^0.8.0;',
        'explanation' => 'Version compiler.',
        'pro_tip' => 'Use latest 0.8+ overflow checks.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'w3-web3js',
    'order' => 4,
    'title' => 'Web3.js / ethers.js',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'Connect wallet, read/write chain.',
    'concepts' => 
    array (
      0 => 'ethers',
      1 => 'wallet',
      2 => 'provider',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'ethers.js',
        'body' => 'const provider = new BrowserProvider(window.ethereum); await provider.send("eth_requestAccounts", []).',
        'code' => 'console.log(\'Practica: w3-web3js\');',
      ),
      1 => 
      array (
        'heading' => 'Contract interaction',
        'body' => 'new Contract(address, abi, signer).transfer(to, amount)',
        'code' => 'console.log(\'Practica: w3-web3js\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿MetaMask provee...?',
        'options' => 
        array (
          0 => 'Browser wallet window.ethereum',
          1 => 'SQL database',
          2 => 'WordPress',
        ),
        'answer' => 'Browser wallet window.ethereum',
        'explanation' => 'User approves each tx.',
        'pro_tip' => 'Never ask seed phrase in dApp.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ABI?',
        'options' => 
        array (
          0 => 'JSON interface contract methods',
          1 => 'Image format',
          2 => 'Gas price',
        ),
        'answer' => 'JSON interface contract methods',
        'explanation' => 'Application Binary Interface.',
        'pro_tip' => 'Hardhat compile generates ABI.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'w3-defi',
    'order' => 5,
    'title' => 'DeFi concepts (teórico)',
    'level' => 'Conceptos',
    'minutes' => 30,
    'summary' => 'DEX, liquidity, NFTs — riesgos.',
    'concepts' => 
    array (
      0 => 'defi',
      1 => 'dex',
      2 => 'nft',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'DeFi',
        'body' => 'Uniswap AMM — swaps sin order book — impermanent loss, rug pulls — **extreme risk**.',
        'code' => 'console.log(\'Practica: w3-defi\');',
      ),
      1 => 
      array (
        'heading' => 'NFTs',
        'body' => 'ERC-721 unique tokens — metadata IPFS — scams abundant.',
        'code' => 'console.log(\'Practica: w3-defi\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿AMM?',
        'options' => 
        array (
          0 => 'Automated Market Maker pool liquidity',
          1 => 'Bank transfer',
          2 => 'Email protocol',
        ),
        'answer' => 'Automated Market Maker pool liquidity',
        'explanation' => 'x*y=k formula Uniswap.',
        'pro_tip' => 'Not financial advice — learn risks.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Rug pull?',
        'options' => 
        array (
          0 => 'Devs abandon steal liquidity',
          1 => 'Legal refund',
          2 => 'Gas refund',
        ),
        'answer' => 'Devs abandon steal liquidity',
        'explanation' => 'DYOR — audit contracts.',
        'pro_tip' => 'Curso seguridad audit skills.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'w3-security',
    'order' => 6,
    'title' => 'Seguridad Web3',
    'level' => 'Seguridad',
    'minutes' => 35,
    'summary' => 'Audits, phishing y best practices.',
    'concepts' => 
    array (
      0 => 'audit',
      1 => 'phishing',
      2 => 'multisig',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Security',
        'body' => 'Professional audit before mainnet; multisig treasury; hardware wallet cold storage.',
        'code' => 'console.log(\'Practica: w3-security\');',
      ),
      1 => 
      array (
        'heading' => 'Phishing',
        'body' => 'Fake mint sites, approval scams — verify contract address Etherscan.',
        'code' => 'console.log(\'Practica: w3-security\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Seed phrase compartir?',
        'options' => 
        array (
          0 => 'NUNCA — acceso total wallet',
          1 => 'OK con soporte',
          2 => 'Public GitHub',
        ),
        'answer' => 'NUNCA — acceso total wallet',
        'explanation' => 'No legitimate service asks.',
        'pro_tip' => 'Curso ethical hacking social engineering.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Contract verify Etherscan?',
        'options' => 
        array (
          0 => 'Source public audit community',
          1 => 'Hides code',
          2 => 'Payment only',
        ),
        'answer' => 'Source public audit community',
        'explanation' => 'Transparency before interact.',
        'pro_tip' => 'Slither static analysis tool.',
      ),
    ),
  ),
);

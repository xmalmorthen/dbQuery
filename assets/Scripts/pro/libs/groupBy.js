const groupBy=c=>n=>n.reduce((n,o)=>{const r=o[c];return n[r]=(n[r]||[]).concat(o),n},{});
document.addEventListener('DOMContentLoaded', () => {
    const pontosClicaiveis = document.querySelectorAll('path[data-state]');
    const officeInfoPanel = document.getElementById('office-info-panel');

    const officeData = {
        "Rio Grande do Sul": {
            location: "Av. General Flores da Cunha, Cachoeirinha - RS",
            contact: "(51) 98176-1286"
        },
        "Santa Catarina": {
            location: "Av. General Flores da Cunha, Cachoeirinha - RS",
            contact: "(51) 98176-1286"
        },
        "Rio de Janeiro": {
            location: "Av. Exemplo, 123, Rio de Janeiro - RJ",
            contact: "(21) 99999-9999"
        }
    };

    // Adiciona o evento de clique a cada estado
    pontosClicaiveis.forEach(elemento => {
        elemento.addEventListener('click', (event) => {
            const nomeEstado = elemento.dataset.state;
            const info = officeData[nomeEstado];

            if (info) {
                // Preenche o painel com as informações do escritório
                officeInfoPanel.innerHTML = `
                    <h3>${nomeEstado}</h3>
                    <p><strong>Endereço:</strong> ${info.location}</p>
                    <p><strong>Contato:</strong> ${info.contact}</p>
                `;
            } else {
                // Exibe uma mensagem se não houver dados
                officeInfoPanel.innerHTML = `
                    <h3>${nomeEstado}</h3>
                    <p>Informações de escritório não disponíveis para este estado.</p>
                `;
            }
        });
    });
});
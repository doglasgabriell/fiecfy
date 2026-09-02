import Sidebar from './components/Sidebar';
import Player from './components/Player';
import Header from './components/Header';
import PlaylistCard from './components/PlaylistCard';

import PlaylistaData from './data/mockData';

function App() {
  return (
    <>
        {/* Div responsavel pelo preenchimento todo da tela usando o h-screen*/}
      <div className="h-screen bg-black text-white flex flex-col">
        {/* Os componentes serão chamados abaixo */}
        <div className='flex flex-1 overflow-hidden'>
           <Sidebar />

            <main className='flex-1 bg-zinc-900 rounded-lg m-2 p-6 overflow-y-auto'>
              <Header />
              <h2 className='text-2xl font-bold mb-6'>Boa tarde!</h2>
              <div className="h-800px">
                <p className='text-zinc-400'>Seus álbuns serão exibidos aqui!</p>

                <div className='flex  flex-wrap gap-6'>
                  <PlaylistCard
                    titulo={"Obsessed With You"}
                    descricao={"Central Cee, Capa da mixtage"}
                    imagem={"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCiIN5R_2b9olmsLmNi806CX6tqpwkuJcHGFsWLmL0Dg&s=10"}
                  />
                  <PlaylistCard
                    titulo={"Doja"}
                    descricao={"Central Cee - Single by simodmart"}
                    imagem={"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqzBKTjNBnGKjaodWZtUgnKPVcb0rouaAI4ZsVsqB81Pyg0-O_os_fqjeK&s=10"}
                  />
                  <PlaylistCard
                    titulo={"Doja"}
                    descricao={"Central Cee - Single by simodmart"}
                    imagem={"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqzBKTjNBnGKjaodWZtUgnKPVcb0rouaAI4ZsVsqB81Pyg0-O_os_fqjeK&s=10"}
                  />

              { PlaylistaData.map( playlist => (
                <PlaylistCard 
                  key={playlist.id}
                  titulo={playlist.titulo}
                  descricao={playlist.descricao}
                  imagem={playlist.imagem}
                />
              ) )}
                </div>
              </div>
            </main>

        </div>


        <Player />
      </div>
    </>
  )
}

export default App;

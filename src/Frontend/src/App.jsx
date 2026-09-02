import Sidebar from './components/Sidebar';
import Player from './components/Player';
import Header from './components/Header';
import PlaylistCard from './components/PlaylistCard';
import playlistData from './dados/playlistAPI';
import generoData from './dados/generoAPI';
import Genero from './components/Genero';

function App() {
  return (
    <>
        {/* Div responsavel pelo preenchimento todo da tela usando o h-screen*/}
      <div className="h-screen bg-black text-white flex flex-col">
        <div className='flex flex-1 overflow-hidden'>
           <Sidebar />
            <main className='flex-1 bg-zinc-900 rounded-lg m-2 p-6 overflow-y-auto'>
              <Header />
              <h2 className='text-2xl font-bold mb-6'>Olá, Dôglas!</h2>
                <div className='flex flex-col'>
                  <a href='#' className='text-end text-red-700 font-bold text-2xl hover:text-red-400 transition-colors'>Show all</a>
                    <div className='w-full overflow-x-auto'>
                      <div className='flex w-full gap-5'>
                          {
                            generoData.map(genero => (
                              <Genero
                              key={genero.id}
                              genero={genero.genero}
                              imagem={genero.imagem}
                              />
                            ))
                          }
                      </div>
                    </div>
                </div>         
              <div className="h-800px">
                <div className='w-full h-0.5 bg-zinc-600 mt-5 mb-5'></div> 
                  <p className='text-zinc-400'>Seus álbuns serão exibidos aqui!</p>
                  <div className='flex flex-wrap'>
                      {
                      // Acessamos o array vindo da api fake, mapeamos ela, criando um elemente que vai ser usado apartir dela para acessar o objeto. Pegamos o componente e acessamos as propriedade do objeto iterando ao playlist card 
                      playlistData.filter(tipo => tipo.type === 'Album').map( playlist => (
                        <PlaylistCard 
                          key={playlist.id}
                          titulo={playlist.titulo}
                          descricao={playlist.descricao}
                          imagem={playlist.imagem}
                        />
                      )) 
                      }
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

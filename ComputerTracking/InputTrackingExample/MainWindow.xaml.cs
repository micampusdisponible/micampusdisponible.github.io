using System;
using System.Globalization;
using System.Windows;
using System.Windows.Threading;
using System.Net;
using System.IO;
using System.Threading;

namespace InputTrackingExample
{
    public partial class MainWindow : Window
    {
        private DispatcherTimer timer;
        private AllInputSources lastInput;
        private KeyboardInput keyboard;
        private MouseInput mouse;
        private Int32 currentActivity;
        private Boolean estado;
        public MainWindow()
        {
            InitializeComponent();

            keyboard = new KeyboardInput();
            keyboard.KeyBoardKeyPressed += keyboard_KeyBoardKeyPressed;

            mouse = new MouseInput();
            mouse.MouseMoved += mouse_MouseMoved;


            lastInput = new AllInputSources();
            
            timer = new DispatcherTimer();
            timer.Interval = new TimeSpan();
            timer.Interval = new TimeSpan(0, 0, 0, 0, 100);
            timer.Tick += timer_Tick;
            timer.Start();
            
        }

        void keyboard_KeyBoardKeyPressed(object sender, EventArgs e)
        {
            keyboardTime.Content = FormatDateTime(DateTime.Now);
        }

        private string FormatDateTime(DateTime dateTime)
        {
            return dateTime.ToString("HH:mm:ss fff", CultureInfo.CurrentUICulture);
        }
        void mouse_MouseMoved(object sender, EventArgs e)
        {
            mouseTime.Content = FormatDateTime(DateTime.Now);
        }

        void timer_Tick(object sender, EventArgs e)
        {

            currentActivity = lastInput.getActivity();
            lastInputTime.Content = currentActivity + " " + estado;
            if (currentActivity > 10000 && currentActivity < 10200)
            {
                estado = false;
                enviarDatos(0);
                lastInputTime.Content = estado + " " + currentActivity;
            }
            else if (estado == false && currentActivity < 200)
            {
                estado = true;
                enviarDatos(1);
                lastInputTime.Content = estado + " " + currentActivity;
            }
            
            
 
        }

        void enviarDatos(Int32 estado)
        {
                string url = "http://micampusdisponible.herobo.com/actividad.php?estacion=3&estado="+estado;

                HttpWebRequest request = (HttpWebRequest)WebRequest.Create(url);

                HttpWebResponse response = (HttpWebResponse)request.GetResponse();

                
                Stream resStream = response.GetResponseStream();

                response.Close();
                //System.Diagnostics.Debug.WriteLine("xxx "+resStream.ToString());
              
        }
    }
}

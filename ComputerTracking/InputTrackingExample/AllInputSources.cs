using System;
using System.Runtime.InteropServices;

namespace InputTrackingExample
{
    public class AllInputSources
    {
        [DllImport("User32.dll")]
        private static extern bool GetLastInputInfo(ref LASTINPUTINFO plii);

        public Int32 getActivity()
        {
            var lastInputInfo = new LASTINPUTINFO();
            lastInputInfo.cbSize = (uint)Marshal.SizeOf(lastInputInfo);

            GetLastInputInfo(ref lastInputInfo);
           
            return (Int32)Environment.TickCount - (Int32)lastInputInfo.dwTime;

        }

        public DateTime GetLastInputTime()
        {
            var lastInputInfo = new LASTINPUTINFO();
            lastInputInfo.cbSize = (uint)Marshal.SizeOf(lastInputInfo);

            GetLastInputInfo(ref lastInputInfo);

            return DateTime.Now.AddMilliseconds(-(Environment.TickCount - lastInputInfo.dwTime));
        }

        [StructLayout(LayoutKind.Sequential)]
        internal struct LASTINPUTINFO
        {
            public uint cbSize;
            public uint dwTime;
        }
    }
}

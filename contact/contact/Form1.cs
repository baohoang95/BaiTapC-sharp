using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace contact
{
    public partial class frmContact : Form
    {
     

        #region Path data file

        string pathContactDataFile;
        #endregion

        public frmContact()
        {
            InitializeComponent();
          
           
            pathContactDataFile = Application.StartupPath + @"\Data\dataContact.txt";
            if (File.Exists(pathContactDataFile))
            {
                var listLines = File.ReadAllLines(pathContactDataFile);
                foreach (var line in listLines)
                {
                    var rs = line.Split(new char[] { '#' });
                    dtgContact.Rows.Add(rs[0], rs[1], rs[2],rs[3]);

                }
            }

           
        }







        private void textBox1_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.Enter)
            {
                string searchValue = txtSearch.Text;
                dtgContact.SelectionMode = DataGridViewSelectionMode.FullRowSelect;
                try
                {
                    foreach (DataGridViewRow row in dtgContact.Rows)
                    {
                        row.Selected = false;
                        if (row.Cells[1].Value.ToString().Equals(searchValue))
                        {
                            row.Selected = true;
                        }
                        if (row.Cells[2].Value.ToString().Equals(searchValue))
                        {
                            row.Selected = true;
                        }
                        if (row.Cells[3].Value.ToString().Equals(searchValue))
                        {
                            row.Selected = true;
                        }
                    }
                }
                catch (Exception exc)
                {
                    MessageBox.Show(exc.Message);
                }
            }
        }

        private void txtSearch_TextChanged(object sender, EventArgs e)
        {

        }
    }
}

<?php require("../../includes/header.php"); ?><h1>Printing Sheets</h1><div class="content">

<p> Ted (the popular talking bear) has been given a job at the printing firm. Looking at his previous employment record, the firm is watching very strictly on his work product. Recently, he has been assigned a task to print on a square sheet of dimension <b>NxN</b>. You may think of the sheet containing <b>N<sup>2</sup></b> cells of dimension <b>1x1</b> each. Since, Ted is a lazy bear, he somehow steals two stamps, a horizontal printing stamp which covers a <b>1*2</b> block and a vertical printing stamp which covers a <b>3*1</b> block. He may use these two stamps in any order and as many times as he wants. But the sheets are old, if the sheet is stamped twice at any cell, it will tear off. Now, there is a shipment of sheets coming with varying sizes. But he observes that in some of the cases it is not possible to completely fill the square sheet with no overlapping stamps. So, he asks for your help in deciding whether it is possible to fill the square sheet with the stamps without any overlapping.</p>
<h3>Input</h3>
<p> The first line of the input contains an integer <b>T</b>, denoting the number of sheets in the shipment. <br />It is followed by <b>T</b> lines each containing a single integer <b>N</b> denoting the side of the square sheet.</p>
<h3>Output</h3>
<p> For each test case, output a single line containing “YES” (without quotes) if it is possible to fill the square sheet without overlapping the stamps and “NO” (without quotes) otherwise.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
2

<b>Output:</b>
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
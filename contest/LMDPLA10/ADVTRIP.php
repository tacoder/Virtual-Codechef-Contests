<?php require("../../includes/header.php"); ?><h1>Veenus on Adventure Trip</h1><div class="content">

<p style="text-align:justify;"> Veenus is a big fan of adventure trips. One day she heard about a distant nation called "Pandora". As non-planned trips sound more adventurous, she packed her bag with essentials and started her journey. She was completely unaware of the <b>transit tax</b> that one has to pay when one enters a nation (she has to pay transit tax to revisit (1,1) during her trip). The transit tax is valid for <b>a single entry</b>. Also she didn't bring any maps with her so she can go from one nation to another in a random manner (you can assume that each move is <b>independent of any previous moves</b> that she has taken). She can revisit already visited nations. Considering the random moves, calculate the <b>expected amount</b> of transit tax paid by her.</p>
<p style="text-align:justify;">
For the matter of simplicity, assume that the nation is a rectangle of size MxN with MN nations. Each nation has 4 neighboring other nations (except ones on the border). Veenus starts with nation (1, 1) and has to reach nation (M, N) where Pandora is located to complete her adventure trip. Also to make the problem even simpler, let's say each nation charges unit money for transit which is common currency for the entire nations.</p>
<p><center><br />
<img border="0" src="http://dl.dropbox.com/u/4372589/1.jpg" alt="http://picasaweb.google.com/anvaysrivastava/Alkhawarizm?authkey=Gv1sRgCKiltti18crPxwE#5522750285503722514" width="400" height="160" /><br />
</center></p>
<h3>Input</h3>
<p style="text-align:justify;">
The input start with integer M, N (1 &lt;= M, N&lt;= 40) on each line. Then followed by 4 set of M x N numbers (row-major) where each of 4 set represent one of the directions<br /><br />
Set 1 North: Probability of moving from p<sub> (i,j) </sub> <sup>k</sup> to p<sub> (i+1,j) </sub> <sup>k</sup><br /><br />
Set 2 East: Probability of moving from p<sub> (i,j) </sub> <sup>k</sup> to p<sub> (i,j+1) </sub> <sup>k</sup><br /><br />
Set 3 South: Probability of moving from p<sub> (i,j) </sub> <sup>k</sup> to p<sub> (i-1,j) </sub> <sup>k</sup><br /><br />
Set 4 West: Probability of moving from p<sub> (i,j) </sub> <sup>k</sup> to p<sub> (i-1,j) </sub> <sup>k</sup><br /><br />
Input is terminated when M = 0 and N = 0.
</p>
<h3>Output</h3>
<p style="text-align:justify;">
Expected transit money that will be required by Veenus to reach her destination nation(M, N). Expected money should be printed up to 8 places after decimal.
</p>
<h3>Examples</h3>
<pre>
<b>Example 1 Input</b>
2 4
0.690000 0.150000 0.900000 0.920000 
0.000000 0.000000 0.000000 0.000000 
0.310000 0.650000 0.070000 0.000000 
0.940000 0.040000 0.140000 0.000000 
0.000000 0.000000 0.000000 0.000000 
0.060000 0.570000 0.050000 0.000000 
0.000000 0.200000 0.030000 0.080000 
0.000000 0.390000 0.810000 0.000000 
0 0

<b>Example 1 Output</b>
37.07916764

<b>Example 2 Input</b>
1 3
0.000000 0.000000 0.000000 
1.000000 0.370000 0.000000 
0.000000 0.000000 0.000000 
0.000000 0.630000 0.000000 
0 0

<b>Example 2 Output</b>
5.40540541

<b>Example 3 Input</b>
6 4
0.730000 0.270000 0.380000 0.930000 
0.250000 0.030000 0.630000 0.930000 
0.060000 0.100000 0.180000 0.500000 
0.750000 0.980000 0.320000 0.760000 
0.100000 0.380000 0.290000 0.950000 
0.000000 0.000000 0.000000 0.000000 
0.270000 0.400000 0.370000 0.000000 
0.720000 0.150000 0.240000 0.000000 
0.650000 0.650000 0.460000 0.000000 
0.230000 0.020000 0.160000 0.000000 
0.170000 0.270000 0.640000 0.000000 
0.250000 0.500000 0.790000 0.000000 
0.000000 0.000000 0.000000 0.000000 
0.030000 0.400000 0.040000 0.010000 
0.290000 0.180000 0.180000 0.010000 
0.020000 0.000000 0.180000 0.130000 
0.730000 0.240000 0.010000 0.010000 
0.750000 0.040000 0.100000 0.000000 
0.000000 0.330000 0.250000 0.070000 
0.000000 0.420000 0.090000 0.060000 
0.000000 0.070000 0.180000 0.490000 
0.000000 0.000000 0.340000 0.110000 
0.000000 0.110000 0.060000 0.040000 
0.000000 0.460000 0.110000 0.000000 
0 0

<b>Example 3 Output</b>
20.07213979
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
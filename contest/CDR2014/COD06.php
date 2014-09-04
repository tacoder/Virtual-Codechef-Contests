<?php require("../../includes/header.php"); ?><h1>Tyrion and his girlfriend</h1><div class="content">
<h2> Tyrion and his girlfriend </h2>
<p>Tyrion Lannister and his girlfriend Hilda are an adventurous couples. They like to search for new places and play dangerous games . In one such adventurous game Hilda gets trapped somewhere in the middle and Tyrion needs to save her .</p>
<p>Hilda and Tyrion are moving on the game map which is 'N X N' square. Tyrion knows Hilda's location but he can't reach her directly. The game restricts his movements.<br />
If Tyrion is located at the coordinates (x,y) then he can move to co-ordinates (x+p,x+q) or (x+p,x-q) or (x-p,x+q) or (x-p,x-q)(if these coordinates exist on the map),where p and q are defined as:</p>
<pre>
               p=1 if q=2
         and   p=2 if q=1
</pre><p>So Tyrion has at most eight choices for making any moving. It will be less than eight if some of the possible co-ordinates don't exist on map.
</p>
<p>For example: if Tyrion is at (1,1) in a ' 4 X 4' map(as shown in figure) then he can move to (3,2)  and (2,3) .Now if Hilda is located at (3,1) then Tyrion can save her in minimum 2 moves .(in figure Tyrion's Location is marked by 'X' and Hilda's location by 'O')
</p>
<p><img src="http://s26.postimg.org/i24wv2ugp/Image.png" /></p>
<h3>INPUT:</h3>
<p>The first line consist of number of test cases 'T' . The next line has the size of the map 'N'. The next 'T' lines have the co-ordinates of Tyrion and Hilda respectively .(Co-ordinates of Tyrion and Hilda are separated by spaces)
 </p>
<h3>CONSTRAINTS:</h3>
<ul>
<li>2&lt;= <b>N</b> &lt;= 8
</li><li>1&lt;=<b>T</b>&lt;=4096
</li></ul>
<h3>OUTPUT:</h3>
<p>For each test case output the minimum number of moves required for saving Hilda .If it is not possible to save her then output -1 .</p>
<h3>SAMPLE INPUT:</h3>
<h5>Input1:</h5>
<pre>
   3
   8
   (1,1) (8,8)
   (1,1) (3,2)
   (8,8) (3,3)
</pre><h5>Output1:</h5>
<pre>
   6
   1
   4
</pre><h5>Input2:</h5>
<pre>
   1
   3
   (1,1) (2,2)
</pre><h5>Output2:</h5>
<pre>
   -1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arvchamp">arvchamp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
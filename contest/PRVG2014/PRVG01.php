<?php require("../../includes/header.php"); ?><h1>Treasure Hunt</h1><div class="content">
<h3>Problem Description</h3>
<p>Neha is designing the treasure hunt routes. She wants to put different routes for different teams, but she wants each team to have routes of equivalent difficulty. The difficulty of a routes depends on its shape and size. On a map of IISc, the co-organizer Sriram has drawn all available routes.</p>
<p>Neha wants to group the routes based on their difficulty. Routes are of the same difficulty if they are the same shape and size, i.e. they can be transformed into each other by rotations or flips.</p>
<p>You are given the routes on the map of 0s and 1s, where the 1s indicate the square is part of a route. Any square of the route must be adjacent to another square of the route horizontally, vertically, or diagonally. You have to label the equivalent routes with the same character.</p>
<h3>Input</h3>
<p>The first line has two integers W and H, the width and height of the map.</p>
<p>The next H lines consist of W unspaced numbers which can be 0s or 1s, the entries of the map.</p>
<h3>Output</h3>
<p>You must output the map with equivalent routes marked with the same letters.</p>
<p>The lettering must be as follows: Starting from the top left of the map, the first route (going left to right, row by row) is marked with ‘a’. The next non-similar route in this manner is ‘b’, and so on. Output of test cases are separated by an empty line.</p>
<h3>Constraints</h3>
<p>0 &lt; W (width of the map) &leq; 201<br /><br />
0 &lt; H (height of the map) &leq; 201<br /><br />
0 &leq; Number of routes &leq; 1000<br /><br />
0 &leq; Number of non-similar routes &leq; 26 (a..z)<br /><br />
1 &leq; Number of squares per route &leq; 160<br /></p>
<p><br /></p>
<h3>Sample Input</h3>
<div>
20 15<br /><br />
11111001000000000000<br /><br />
10001000011100000010<br /><br />
10101000000100001110<br /><br />
10001000000000010000<br /><br />
11111011100000100000<br /><br />
00000000000100000001<br /><br />
00000000000010010010<br /><br />
00011111000001000100<br /><br />
10010001000001000000<br /><br />
10010001000001100010<br /><br />
11010001000100000001<br /><br />
00011111001000010100<br /><br />
01000000010000010001<br /><br />
01000000010000010010<br /><br />
11000000110000000100
</div>
<p><br /></p>
<h3>Sample Output</h3>
<div>
aaaaa00b000000000000<br /><br />
a000a0000ccc000000d0<br /><br />
a0b0a000000c0000ddd0<br /><br />
a000a0000000000d0000<br /><br />
aaaaa0eee00000d00000<br /><br />
00000000000d0000000f<br /><br />
000000000000d00b00f0<br /><br />
000aaaaa00000d000f00<br /><br />
c00a000a00000d000000<br /><br />
c00a000a00000dd000g0<br /><br />
cc0a000a000d0000000g<br /><br />
000aaaaa00d0000e0b00<br /><br />
0c0000000d00000e000f<br /><br />
0c0000000d00000e00f0<br /><br />
cc000000dd0000000f00
</div>
<p><br /></p>
<p>For the sake of your clarity, here are the input and output maps with the extraneous zeros removed. This is not the format of the input or the required output.</p>
<h3>Clear Input:</h3>
<div>
11111  1            <br /><br />
1   1    111      1 <br /><br />
1 1 1      1    111 <br /><br />
1   1          1    <br /><br />
11111 111     1     <br /><br />
           1       1<br /><br />
            1  1  1 <br /><br />
   11111     1   1  <br /><br />
1  1   1     1      <br /><br />
1  1   1     11   1 <br /><br />
11 1   1   1       1<br /><br />
   11111  1    1 1  <br /><br />
 1       1     1   1<br /><br />
 1       1     1  1 <br /><br />
11      11       1
</div>
<p><br /></p>
<h3>Clear Output:</h3>
<div>
aaaaa  b            <br /><br />
a   a    ccc      d <br /><br />
a b a      c    ddd <br /><br />
a   a          d    <br /><br />
aaaaa eee     d     <br /><br />
           d       f<br /><br />
            d  b  f <br /><br />
   aaaaa     d   f  <br /><br />
c  a   a     d      <br /><br />
c  a   a     dd   g <br /><br />
cc a   a   d       g<br /><br />
   aaaaa  d    e b  <br /><br />
 c       d     e   f<br /><br />
 c       d     e  f <br /><br />
cc      dd       f
</div>
<p><br /></p>
<h3>Output Constraints</h3>
<p>Time: 3 seconds<br /><br />
Space: 1 MB</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pravega_opc">pravega_opc</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-11-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
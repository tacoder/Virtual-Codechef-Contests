<?php require("../../includes/header.php"); ?><h1>Joker and the Arkham Asylum</h1><div class="content">
<p>The Arkham Asylum of Gotham, is the place of residence of evils. Batman uses his super awesome Bat-Technology to guard it against the potential outbreak.<br /><br /></p>
<p>The Asylum can be considered as a <strong>NxN</strong> maze, where each cell houses a building. Note that, the left most building in the bottom most row is said to be present at the cell in 1<sup>st</sup> row and 1<sup>st</sup> column. Similarly, the right most building in the top most row is said to be present at the cell in N<sup>th</sup> row and N<sup>th</sup> column. Each building is pyramidal in shape and is three storey high. </p>
<p><br /><br /> </p>
<p>Once a while, Batman catches prisoners and puts them into Arkham Asylum. Note that, initially, the Asylum is empty. For proper utilization of pyramidal space, the distribution of <strong>new prisoners</strong> in a building is as follows:<br /><br />
If D+D<sup>2</sup>+D<sup>3</sup> new prisoners are inserted in a building, D<sup>3</sup> goes into ground floor, D<sup>2</sup> into first floor and D into second floor. <br /><br /></p>
<p>Now, Batman places the new prisoners in the buildings along a tilted line, 45° to the sides of the maze, in the increasing direction of row numbers.<br />
Note that, he could start this line anywhere in the first row. He would place (D+D<sup>2</sup>+D<sup>3</sup>) prisoners in each building, in above described manner.Also, it is guaranteed that the number of new prisoners would be a multiple of D+D<sup>2</sup>+D<sup>3</sup> and this line would atmost reach the boundary of the maze, i.e Batman would start this line well in advance, so as to accommodate all prisoners.<br /><br /></p>
<p>Under the effect of the super awesome Bat-Technology, the power packets required to escape from the Asylum, for each prisoner living in the building at j<sup>th</sup> row and<br />
i<sup>th</sup> column of the maze is given by:<br />
<ul>
<li>F<sub>0</sub> (i,j) = (j-1)<sup>3</sup> for the ground floor</li>
<li>F<sub>1</sub> (i,j) = (j-1)<sup>2</sup> for the first floor</li>
<li>F<sub>2</sub> (i,j) = (j-1) for the second floor</li>
</ul>
</p><p><br /><br />
Note that the super awesome Bat-Technology is super-costly (even for Batman!) and is employed just inside the Asylum and nowhere else outside it. So, the prisoners are free to move anywhere once they are outside the prison.<br /><br /></p>
<p>Now the Joker, who enjoys chaos, decides to free some prisoners. For that, he needs some power packets, which he can smuggle into the Asylum and distribute it amongst prisoners so as they can be free and join with him in his quest for establishing the reign of Chaos in the universe. <br /><br /></p>
<p>The Joker needs your help to find out the number of power packets needed to free the prisoners from all the building in between and including columns X and Y, in all rows. Since the answer could be very, very large (after all, you are fighting against the super awesome Bat-Technology), you need to print your answer modulus 10<sup>9</sup>+7.<br /><br /></p>
<h3>Input Format</h3>
<p><br />
<ul>
<li>First Line contains 2 space separated Integers N and T, denoting the size of the maze and the number of queries to follow.</li>
<p><br /></p>
<li>Next T lines follow which will either be of form (U X Y D) OR (Q X Y) without brackets.</li>
</ul>
</p><p><br /><br />
U X Y D denotes the addition of (Y-X+1)*(D+D<sup>2</sup>+D<sup>3</sup>) prisoners, in a line starting from the X<sup>th</sup> building in first row and extending upto Y<sup>th</sup> building in (Y-X+1)<sup>th</sup> row,<br /><br />
Q X Y denotes that Joker wishes to query the cost of releasing the prisoners in the above described manner.<br /><br />
<br /><br /></p>
<h3>Output Format </h3>
<p><br /></p>
<ul>
<li>For each Query of type Q output a single line containing the answer as required.</li>
</ul>
<p><br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 10<sup>5</sup></li>
<p><br /></p>
<li>1 ≤ T ≤ 10<sup>5</sup></li>
<p><br /></p>
<li>1 ≤ X ≤ Y ≤ N</li>
<p><br /></p>
<li>1 ≤ D ≤ 100<br /></li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>4 2<br /><br />
U 1 4 2<br /><br />
Q 2 3<br /></p>
<h3>Sample Output</h3>
<p>98<br /><br />
<br /></p>
<h3>Explanation</h3>
<p><br /><br />
After the first update, the Asylum looks like this:<br /></p>
<p>0,0,0 0,0,0 0,0,0 8,4,2 <br /><br />
0,0,0 0,0,0 8,4,2 0,0,0 <br /><br />
0,0,0 8,4,2 0,0,0 0,0,0 <br /><br />
8,4,2 0,0,0 0,0,0 0,0,0 <br /><br />
<br /><br />
Here, each tuple (a,b,c) denotes the current number of persons in the building, in ground floor, first floor and second floor respectively.<br /><br />
The answer is (8*1+4*1+2*1)+(8*8+4*4+2*2) = 14+84 = 98</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
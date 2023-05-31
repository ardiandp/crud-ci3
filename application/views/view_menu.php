<table>
   <thead>
      <tr>
         <th>Master ID</th>
         <th>Master Name</th>
         <th>Detail ID</th>
         <th>Detail Name</th>
      </tr>
   </thead>
   <tbody>
      <?php foreach ($master_detail as $md) { ?>
         <tr>
            <td rowspan="<?php echo count($md->detail); ?>"><?php echo $md->id ?></td>
            <td rowspan="<?php echo count($md->detail); ?>"><?php echo $md->header_name; ?></td>
            <?php foreach ($md->header_id as $detail) { ?>
               <?php if ($detail->id != $md->detail[0]->id) { ?>
                  <tr>
               <?php } ?>
                  <td><?php echo $detail->detail_id; ?></td>
                  <td><?php echo $detail->detail_name; ?></td>
               <?php if ($detail->id != $md->detail[0]->id) { ?>
                  </tr>
               <?php } ?>
            <?php } ?>
         </tr>
      <?php } ?>
   </tbody>
</table>

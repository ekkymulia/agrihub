package com.example.agrihubandro.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.agrihubandro.R;
import com.example.agrihubandro.models.UserModel;

import java.util.List;

public class VendorAdapter extends RecyclerView.Adapter<VendorAdapter.ViewHolder> {

    private List<UserModel> mData;
    private LayoutInflater mInflater;
    private ItemClickListener mClickListener;

    public VendorAdapter(Context context, List<UserModel> data) {
        this.mInflater = LayoutInflater.from(context);
        this.mData = data;
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = mInflater.inflate(R.layout.activity_user_list, parent, false);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        UserModel user = mData.get(position);

        holder.vendor_nama.setText(user.getFullName());
        holder.vendor_alamat.setText("\uD83D\uDCCD " + user.getAddress());
    }

    @Override
    public int getItemCount() {
        return mData.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder implements View.OnClickListener {
        TextView vendor_nama, vendor_alamat;

        ViewHolder(View itemView) {
            super(itemView);
            vendor_nama = itemView.findViewById(R.id.vendor_name);
            vendor_alamat = itemView.findViewById(R.id.vendor_alamat);
            itemView.setOnClickListener(this);
        }

        @Override
        public void onClick(View view) {
            if (mClickListener != null) mClickListener.onItemClick(view, getAdapterPosition());
        }
    }

    public UserModel getItem(int id) {
        return mData.get(id);
    }

    public void setClickListener(ItemClickListener itemClickListener) {
        this.mClickListener = itemClickListener;
    }

    public interface ItemClickListener {
        void onItemClick(View view, int position);
    }
}
